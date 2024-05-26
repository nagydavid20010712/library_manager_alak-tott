<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Series;
use App\Models\BookInSeries;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

use Purifier;
class AddBookController extends Controller
{
    public function index() {

        $series = Series::all();
    
        return view("add_book", ["series" => $series]);
    }

    public function upload_book(Request $request) {
        $validated = Validator::make($request->all(), [
            "isbn" => "required|numeric|min_digits:10",
            "publisher" => "required",
            "title" => "required",
            "publish" => "required|numeric|min:1",
            "description" => "required",
            "writers" => "required",
            "language" => "required",
            "number_of_pages" => "required|numeric|min:1",
            "genre" => "required",
            "cover" => "required|file|mimes:jpg|max: 5120" //5MB
        ], 
        [
            "isbn.required" => "ISBN szám megadása kötelező!",
            "isbn.numeric" => "Az ISBN csak számjegyekből állhat!",
            "isbn.min_digits" => "Az ISBN-nek minimum 10 számjegyből kell állnia!",
            "publisher.required" => "A kiadónak a kitöltése kötelező!",
            "title.required" => "A cím kitöltése kötelező!",
            "publish.required" => "A kiadás dátumának a kitöltése kötelező!",
            "publish.numeric" => "A kiadás dátum csak szám lehet!",
            "publish.min" => "A dátum csak poztív szám lehet!",
            "description.required" => "A leírásnak a kitöltése kötelező!",
            "writers.required" => "A szerző(k) kitöltése kötelező!",
            "language.required" => "A nyelv kitöltése kötelező!",
            "number_of_pages.required" => "Az oldalak számát meg kell adni!",
            "number_of_pages.numeric" => "Csak számot lehet megadni",
            "number_of_pages.min" => "Az oldalak száma csak 1 vagy annál nagyobb szám lehet!",
            "genre.required" => "A műfaj megadása kötelező!" 
        ]);

        if($validated->fails()) {
            return response()->json(["msgType" => "form_error", "errors" => $validated->errors()], 200);
        }

        /*összes whitespace karakter eltávolítása*/
        $w_title = preg_replace('/\s+/', '', $request->input("title"));
        $w_publish = preg_replace('/\s+/', '', $request->input("publish"));
        $w_description = preg_replace('/\s+/', '', $request->input("description"));
        $w_writers = preg_replace('/\s+/', '', $request->input("writers"));
        $w_genre = preg_replace('/\s+/', '', $request->input("genre"));
        $w_publisher = preg_replace('/\s+/', '', $request->input("publisher"));
        $w_isbn = preg_replace('/\s+/', '', $request->input("isbn"));
        $w_language = preg_replace('/\s+/', '', $request->input("language"));
        $w_number_of_pages = preg_replace('/\s+/', '', $request->input("number_of_pages"));
        $w_new_series = preg_replace('/\s+/', '', $request->input("new_series") == null ? " " : $request->input("new_series"));

        if($request->input("checked") == "true" && $w_new_series === "") {
            
            return response()->json(["msgType" => "series_error", "error" => "A könvy szériájának a megadása kötelező!"], 200);
        }

        /*XSS elleni védelem*/
        $cleaned_title = Purifier::clean($w_title);
        $cleaned_publish = Purifier::clean($w_publish);
        $cleaned_description = Purifier::clean($w_description);
        $cleaned_writers = Purifier::clean($w_writers);
        $cleaned_genre = Purifier::clean($w_genre);
        $cleaned_publisher = Purifier::clean($w_publisher);
        $cleaned_isbn = Purifier::clean($w_isbn);
        $cleaned_language = Purifier::clean($w_language);
        $cleaned_number_of_pages = Purifier::clean($w_number_of_pages);
        $cleaned_new_series = Purifier::clean($w_new_series);

        if($w_title == $cleaned_title &&
           $w_publish == $cleaned_publish &&
           $w_description == $cleaned_description &&
           $w_writers == $cleaned_writers &&
           $w_genre == $cleaned_genre &&
           $w_publisher == $cleaned_publisher &&
           $w_isbn == $cleaned_isbn &&
           $w_language == $cleaned_language &&
           $w_number_of_pages == $cleaned_number_of_pages) 
           {
                $cover = $request->file("cover");
                $cover_name = $request->input('isbn') . "." . $cover->getClientOriginalExtension();

                try {
                    $res = DB::transaction(function() use($request, $cover_name) {
                        Book::create([
                              "isbn" => $request->input("isbn"),
                              "title" => $request->input("title"),
                              "description" => $request->input("description"),
                              "genre" => $request->input("genre"),
                              "language" => $request->input("language"),
                              "publisher" => $request->input("publisher"),
                              "writers" => $request->input("writers"),
                              "cover" => "images/book_covers/" . $cover_name,
                              "publish_date" => $request->input("publish"),
                              "number_of_pages" => $request->input("number_of_pages"),
                              "created_at" => today(),
                              "modified_at" => today()
                        ]);
    
                        
                        if($request->input("checked") == "true") {
                            $new_series_id = Series::create([
                                "name" => $request->input("new_series")
                            ]);

                            BookInSeries::create([
                                "isbn" => $request->input("isbn"),
                                "series_id" => $new_series_id->id
                            ]);

                            /*frissíteni kell a szériát mert előfordulhat, hogy már amihez szeretnénk a könyvet hozzáadni
                            annak a szériája cachelve lett és így nem fog belekerülni*/

                            $series = Cache::store("memcached")->get("series:" . $new_series_id->id);

                            if($series != null) {
                                $books = $series["books"];

                                $books[] = $request->input("isbn");

                                $s = [
                                    "name" => $series->name,
                                    "books" => $books
                                ];
                                Cache::store("memcached")->put("series:" . $new_series_id->id, $s, now()->addHour());
                            }

                        } else {
                            /*csak akkor ha a könyv tényleg tartozik szériához*/
                            if($request->input("series") != "ns") {
                                /*$new_series_id = Series::create([
                                    "name" => $request->input("series")
                                ]);*/
                                /*Mivel már tartozik egy szériához így csak elég összepárosítani őket*/
                                BookInSeries::create([
                                    "isbn" => $request->input("isbn"),
                                    "series_id" => $request->input("series")
                                ]);

                                $series = Cache::store("memcached")->get("series:" . $request->input("series"));

                                if($series != null) {
                                    $books = $series["books"];

                                    $books[] = $request->input("isbn");

                                    $s = [
                                        "name" => $series["name"],
                                        "books" => $books
                                    ];
                                    Cache::store("memcached")->put("series:" . $request->input("series"), $s, now()->addHour());
                                }
                            }
                        }

                        return true;
                    });

                    if($res) {
                        $path = $cover->move(public_path("images/book_covers"), $cover_name);
    
                        if($path) {
                            return response()->json(["msgType" => "success", "msg" => "Könyv hozzáadása sikeres!"], 200);
                        } 
                        
                        return response()->json(["msgType" => "cover_error", "msg" => "Hiba történt a borító feltöltése során!"], 200);
                    }

                    return response()->json(["msgType" => "insert_error", "msg" => "Hiba történt a könyv hozzáadása során!"], 200);

                } catch(\Illuminate\Database\QueryException $e) {
                    if($e->errorInfo[1] == 1062) {
                        return response()->json(["msgType" => "duplicate_error", "msg" => "Ilyen ISBN számú könyv már szerepel az adatbázisban!"], 200);
                    }
                    Log::info($e->getMessage());
                    return response()->json(["msgType" => "insert_error", "msg" => "Hiba történt a könyv hozzáadása során!"], 200);
                }


                

                /*if($res) {
                    $path = $cover->move(public_path("images/book_covers"), $cover_name);

                    if($path) {
                        return response()->json(["msgType" => "success", "msg" => "Könyv hozzáadása sikeres!"], 200);
                    } 
                    
                    return response()->json(["msgType" => "cover_error", "msg" => "Hiba történt a borító feltöltése során!"], 200);
                } else {
                    return response()->json(["msgType" => "insert_error", "msg" => "Hiba történt a könyv hozzáadása során!"], 200);
                }*/

        }

        return response()->json(["msgType" => "not_known", "msg" => "Ismeretlen hiba történt!"], 200);
    }
}

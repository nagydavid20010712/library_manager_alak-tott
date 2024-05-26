<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Book::count() == 0) {
            $books = [
                [
                    "isbn" => 9789635619801,
                    "title" => "Vérből és hamuból",
                    "description" => "EGY SZŰZ...

                    Egy új korszak hajnalán, a születésekor kiválasztották Poppyt, ezért az élete sosem volt igazán a sajátja. A Szűz élete magányos. Sohasem érinthetik meg. Sohasem nézhetnek rá. Sohasem szólhatnak hozzá. Sohasem tapasztalhatja meg az élvezeteket. Ám ő Felemelkedésének napjára várva szívesebben tölti idejét a testőreivel, és inkább harcol a gonosszal, ami elvette tőle a családját, mint hogy arra készüljön, hogy az istenek méltónak találják. De ez a döntés sem volt sohasem az övé.
                    
                    EGY KÖTELESSÉG...
                    
                    Az egész királyság jövőjének terhe Poppy vállát nyomja, és ez olyasvalami, amire egyáltalán nem biztos, hogy vágyik. Hiszen egy Szűznek is van szíve. És lelke. És vágyai. És amikor Hawke, az arany szemű őr felesküszik rá, hogy biztosítja a Felemelkedését, így belép az életébe, a végzet és a kötelesség összekuszálódik a sóvárgással. Hawke felkorbácsolja a lány indulatait, elülteti benne a kételyt azzal szemben, amiben eddig hitt, és megkísérti azzal, ami tilos.
                    
                    EGY KIRÁLYSÁG...
                    
                    Egy bukott királyság, amit magára hagytak az istenek, és amitől rettegnek a halandók, ismét feltámad, hogy erőszakkal és bosszúval mindenáron visszaszerezze, ami egykor az övé volt. És ahogy az átkozottak árnyéka egyre közelebb húzódik, a tiltott és a helyes közötti határvonal is elmosódik. Poppy nem csupán a szívét kockáztatja, hanem azt is, hogy méltatlannak találják az istenek, ráadásul az élete is veszélybe kerül, amikor minden véres fenyegetés, ami egyben tartja a világát, kezdi felfedni magát.
                    ",
                    "publish_date" => 2020,
                    "writers" => "Jennifer L Armentrout",
                    "publisher" => "Könyvmoly képző",
                    "genre" => "fantasy",
                    "language" => "magyar",
                    "number_of_pages" => 681,
                    "created_at" => now(),
                    "modified_at" => now(),
                    "cover" => "images/book_covers/9789635619801.jpg"
                ],
                [
                    "isbn" => 9789635971077,
                    "title" => "Hús és tűz királysága",
                    "description" => "Erősebb a szerelem a bosszúnál?

                    EGY ÁRULÁS...
                    
                    Minden, amiben Poppy valaha hitt, hazugság, beleértve a férfit is,
                    akibe beleszeretett. És nem igazán tudja, ki is ő valójában a Szűz fátyla nélkül.
                    Azt viszont tudja, hogy semmi nem jelent rá akkora veszélyt, mint ő. A Sötét Szerzet. Atlantia királyfija. Aki azt akarja, hogy Poppy küzdjön ellene, és ez egy olyan parancs, aminek ezer örömmel engedelmeskedik. Lehet, hogy elrabolta, de sosem lesz az övé.
                    
                    EGY DÖNTÉS...
                    
                    Casteel Da'Neer hazugságai ugyanolyan megnyerőek, mint az érintése.
                    Az igazságai pedig olyan érzékiek, mint a harapása. De Poppy
                    csak rajta keresztül kaphatja meg, amit akar - hogy megtalálja a bátyját, Iant.
                    Az, hogy együttműködik Casteellel, ahelyett, hogy ellene dolgozna,
                    kockázatot rejt magában. A királyfi mégis minden lélegzetvételével kísérti őt,
                    és azt kínálja fel, amire a lány mindig is vágyott. És Poppy túlságosan vakmerő,
                    túlságosan kiéhezett ahhoz, hogy ellenálljon a kísértésnek.
                    
                    EGY TITOK...
                    
                    Azonban a nyugtalanság egyre fokozódik Atlantiában, miközben a királyfi
                    hazatérését várják. Egyre többet suttognak háborúról, és Poppy
                    az események kellős közepébe csöppent. Sötét titkok törnek felszínre,
                    amelyek beszivárogtak a két királyság véráztatta bűneibe, és mindkét királyság
                    bármit megtenne azért, hogy rejtve maradjon az igazság. De amikor megrázkódik
                    a föld, és az ég vérezni kezd, lehet, hogy már túl késő.
                    
                    Vesd bele magad!",
                    "publish_date" => 2022,
                    "writers" => "Jennifer L Armentrout",
                    "publisher" => "Könyvmoly képző",
                    "language" => "magyar",
                    "genre" => "fantasy",
                    "number_of_pages" => 654,
                    "created_at" => now(),
                    "modified_at" => now(),
                    "cover" => "images/book_covers/9789635971077.jpg"
                ],
                [
                    "isbn" => 9789635975556,
                    "title" => "Az aranyozott csontkorona",
                    "description" => "Ő VOLT AZ ÁLDOZAT ÉS A TÚLÉLŐ...

                    Poppy álmodni sem mert volna róla, hogy ekkora szerelemre lel
                    Casteel királyfi mellett. Élvezni szeretné a boldogságát, azonban először ki kell
                    szabadítaniuk Casteel bátyját, majd megkeresni Poppyét. Veszélyes küldetésük
                    következményei olyan messzire nyúlhatnak, amilyenről egyikük sem álmodott.
                    Mert Poppy a Kiválasztott, az Áldott, ő Atlantia valódi uralkodója.
                    Az istenek királyának vére folyik az ereiben.
                    
                    
                    AZ ELLENSÉG ÉS A HARCOS...
                    
                    Poppy mindig arra vágyott, hogy a saját életét irányíthassa, nem másokét.
                    Most azonban döntenie kell, hogy lemond arról, ami megilleti, vagy megszerzi
                    az aranyozott koronát, és a hús és tűz királynőjévé válik. Ám ahogy a királyságok
                    sötét bűnei és véráztatta titkai napvilágra kerülnek, felébred egy rég elfeledett erő,
                    és valódi veszéllyel fenyeget. És őket semmi nem állíthatja meg,
                    hogy megakadályozzák, hogy a korona valaha is Poppy fejére kerüljön.
                    
                    
                    A SZERELMES ÉS A TÁRS...
                    
                    Azonban a legnagyobb fenyegetés rájuk és Atlantiára a távoli Nyugaton várakozik.
                    A vér és hamu királynőjének megvannak a saját tervei, és több száz éve csak arra
                    vár, hogy végre megvalósítsa őket. Poppynak és Casteelnek meg kell próbálnia
                    a lehetetlent - elutazni az istenek földjére, hogy felébresszék magát a királyt.
                    Ahogy fény derül a megdöbbentő titkokra és a legdurvább árulásokra, ellenségek
                    bukkannak fel, hogy megingassák mindazt, amiért ok ketten harcolnak. Ők pedig
                    megtapasztalják, hogy meddig hajlandók elmenni a népükért - és egymásért.
                    
                    
                    ÉS POPPYBÓL KIRÁLYNŐ LESZ...
                    ",
                    "publish_date" => 2023,
                    "writers" => "Jennifer L Armentrout",
                    "publisher" => "Könyvmoly képző",
                    "language" => "magyar",
                    "genre" => "fantasy",
                    "number_of_pages" => 657,
                    "created_at" => now(),
                    "modified_at" => now(),
                    "cover" => "images/book_covers/9789635975556.jpg"
                ]
            ];

            Book::insert($books);
        }
    }
}

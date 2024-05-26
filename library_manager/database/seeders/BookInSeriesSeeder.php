<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\BookInSeries;

class BookInSeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ver és hamu
        if(BookInSeries::count() == 0) {
            $s = [
                [
                    "isbn" => 9789635619801,
                    "series_id" => 1
                ],
                [
                    "isbn" => 9789635971077,
                    "series_id" => 1
                ],
                [
                    "isbn" => 9789635975556,
                    "series_id" => 1
                ],
                [
                    "isbn" => 9789634578550,
                    "series_id" => 2
                ],
                [
                    "isbn" => 9789635976416,
                    "series_id" => 2
                ],
                [
                    "isbn" => 9789635618385,
                    "series_id" => 2
                ],
                [
                    "isbn" => 9789634572435,
                    "series_id" => 3
                ],
                [
                    "isbn" => 9789633994184,
                    "series_id" => 3
                ],
                [
                    "isbn" => 9786155628689,
                    "series_id" => 4
                ],
                [
                    "isbn" => 9786155628399,
                    "series_id" => 4
                ],
                [
                    "isbn" => 9786155628177,
                    "series_id" => 4
                ]
            ];
    
            BookInSeries::insert($s);
        }
        
    }
}

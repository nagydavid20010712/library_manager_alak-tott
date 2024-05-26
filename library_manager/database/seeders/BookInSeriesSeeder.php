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
            ]
        ];

        BookInSeries::insert($s);
    }
}

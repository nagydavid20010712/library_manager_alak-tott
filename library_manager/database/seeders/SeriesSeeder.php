<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Series;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Series::count() == 0) {
            $s = [
                [
                    "id" => 1,
                    "name" => "Vér és hamu"
                ],
                [
                    "id" => 2,
                    "name" => "Sötét, magányos átok"
                ],
                [
                    "id" => 3,
                    "name" => "Velünk véget ér"
                ],
                [
                    "id" => 4,
                    "name" => "Hemul triológia"
                ]
            ];
    
    
            Series::insert($s);
        }
        
    }
}

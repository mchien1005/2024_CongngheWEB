<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            ['title' => 'Avengers: Endgame', 'director' => 'Anthony và Joe Russo', 'release_date' => '2019-04-26', 'duration' => 181, 'cinema_id' => 1],
            ['title' => 'Inception', 'director' => 'Christopher Nolan', 'release_date' => '2010-07-16', 'duration' => 148, 'cinema_id' => 1],
            ['title' => 'Parasite', 'director' => 'Bong Joon-ho', 'release_date' => '2019-05-30', 'duration' => 132, 'cinema_id' => 2],
            ['title' => 'The Dark Knight', 'director' => 'Christopher Nolan', 'release_date' => '2008-07-18', 'duration' => 152, 'cinema_id' => 2],
        ]);
    }
}
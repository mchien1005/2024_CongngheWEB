<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ComputersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('computers')->insert([
            ['computer_name' => 'Lab1-PC01', 'model' => 'Dell Optiplex 7090', 'operating_system' => 'Windows 10 Pro', 'processor' => 'Intel Core i5-11400', 'memory' => 8, 'available' => true],
            ['computer_name' => 'Lab1-PC02', 'model' => 'HP ProDesk 600 G2', 'operating_system' => 'Windows 11', 'processor' => 'Intel Core i7-9700', 'memory' => 16, 'available' => false],
            ['computer_name' => 'Lab2-PC03', 'model' => 'Lenovo ThinkCentre M720', 'operating_system' => 'Ubuntu 22.04', 'processor' => 'AMD Ryzen 5 3600', 'memory' => 16, 'available' => true],
        ]);
    }
}
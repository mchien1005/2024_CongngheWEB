<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('computers')->insert([
                'computer_name' => $faker->unique()->word . '-' . $faker->numberBetween(1, 100),
                'model' => $faker->randomElement(['Dell Optiplex 7090', 'HP EliteDesk 800', 'Lenovo ThinkCentre M720', 'Macbook Air M1']),
                'operating_system' => $faker->randomElement(['Windows 10', 'Windows 11 Pro', 'Ubuntu 20.04', 'macOS Big Sur']),
                'processor' => $faker->randomElement(['Intel Core i5-10600', 'Intel Core i7-12700', 'AMD Ryzen 7 5600', 'Apple M1']),
                'memory' => $faker->numberBetween(6, 64),
                'available' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

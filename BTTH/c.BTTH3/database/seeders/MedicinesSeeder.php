<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Sinh 10 loại thuốc
        for ($i = 1; $i <= 10; $i++) {
            DB::table('medicines')->insert([
                'name' => $faker->word . ' ' . $faker->randomElement(['Capsule', 'Tablet', 'Syrup']),
                'brand' => $faker->company,
                'dosage' => $faker->randomElement(['500mg', '250mg', '10ml', '100mg']),
                'form' => $faker->randomElement(['Tablet', 'Capsule', 'Syrup']),
                'price' => $faker->randomFloat(2, 1, 100), // Giá từ 1 đến 100
                'stock' => $faker->numberBetween(50, 500), // Tồn kho từ 50 đến 500
            ]);
        }
    }
}
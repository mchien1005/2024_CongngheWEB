<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Sinh 20 học sinh
        for ($i = 1; $i <= 20; $i++) {
            DB::table('students')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->date('Y-m-d', '-4 years'), // Giả sử trẻ từ 4 tuổi trở lên
                'parent_phone' => $faker->optional()->numerify('0#########'),
                'class_id' => $faker->numberBetween(1, 4), // class_id từ 1 đến 4
            ]);
        }//
    }
}
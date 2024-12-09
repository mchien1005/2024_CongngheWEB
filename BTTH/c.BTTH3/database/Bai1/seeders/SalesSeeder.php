<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) {
            DB::table('sales')->insert([
                'medicine_id' => $faker->numberBetween(1, 10), // medicine_id từ 1 đến 10
                'quantity' => $faker->numberBetween(1, 20), // Số lượng bán từ 1 đến 20
                'sale_date' => $faker->dateTimeBetween('-1 month', 'now'), // Ngày bán trong vòng 1 tháng gần nhất
                'customer_phone' => $faker->optional()->numerify('0#########'), // Số điện thoại ngẫu nhiên hoặc null
            ]);
        }
    }
}
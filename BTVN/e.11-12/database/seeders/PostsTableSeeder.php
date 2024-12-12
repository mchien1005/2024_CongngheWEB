<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'created_at' => Carbon::now()->subDays(rand(0, 30)), // Ngày ngẫu nhiên từ 0 đến 30 ngày trước
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

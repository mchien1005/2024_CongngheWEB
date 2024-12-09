<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class IssuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('issues')->insert([
            [
                'computer_id' => 1, // Liên kết với máy tính Lab1-PC01
                'reported_by' => $faker->name,
                'reported_date' => now()->subDays(3),
                'description' => 'Máy không khởi động được.',
                'urgency' => 'High',
                'status' => 'Open',
            ],
            [
                'computer_id' => 2, // Liên kết với máy tính Lab1-PC02
                'reported_by' => $faker->name,
                'reported_date' => now()->subDay(),
                'description' => 'Hệ điều hành bị lỗi sau khi cập nhật.',
                'urgency' => 'Medium',
                'status' => 'In Progress',
            ],
            [
                'computer_id' => 3, // Liên kết với máy tính Lab2-PC03
                'reported_by' => $faker->name,
                'reported_date' => now()->subWeek(),
                'description' => 'Lỗi card mạng, không thể kết nối Internet.',
                'urgency' => 'Low',
                'status' => 'Resolved',
            ],
        ]);
    }
}
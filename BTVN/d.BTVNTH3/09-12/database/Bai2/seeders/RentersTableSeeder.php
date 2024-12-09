<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('renters')->insert([
            ['name' => 'Nguyễn Minh Chiến', 'phone_number' => '0987654321', 'email' => 'nmc@gmail.com'],
            ['name' => 'Trần Thị B', 'phone_number' => '0912345678', 'email' => 'ttb@gmail.com'],
        ]);
    }
}
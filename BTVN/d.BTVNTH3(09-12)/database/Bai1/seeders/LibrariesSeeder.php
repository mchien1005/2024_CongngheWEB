<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LibrariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('libraries')->insert([
            ['name' => 'Thư viện IT Đại học Thủy Lợi', 'address' => '175 Phố Tây Sơn, Hà Nội', 'contact_number' => '0123456789'],
            ['name' => 'Thư viện Khoa học Tự nhiên', 'address' => '456 Đường Y, TP HCM', 'contact_number' => '0987654321'],
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Hardware_devicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hardware_devices')->insert([
            ['device_name' => 'Logitech G502', 'type' => 'Mouse', 'status' => true, 'center_id' => 1],
            ['device_name' => 'Razer BlackWidow', 'type' => 'Keyboard', 'status' => true, 'center_id' => 1],
            ['device_name' => 'HyperX Cloud II', 'type' => 'Headset', 'status' => false, 'center_id' => 2],
            ['device_name' => 'SteelSeries Rival 600', 'type' => 'Mouse', 'status' => true, 'center_id' => 2],
        ]);
    }
}
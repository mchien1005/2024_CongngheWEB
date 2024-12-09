<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hardware_devices', function (Blueprint $table) {
            $table->id(); // Mã thiết bị
            $table->string('device_name'); // Tên thiết bị
            $table->enum('type', ['Mouse', 'Keyboard', 'Headset']); // Loại thiết bị
            $table->boolean('status')->default(true); // Trạng thái hoạt động (mặc định: true)
            $table->foreignId('center_id') // Khóa ngoại tham chiếu `it_centers.id`
                ->constrained('it_centers')
                ->onDelete('cascade'); // Xóa trung tâm sẽ xóa các thiết bị
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware_devices');
    }
};
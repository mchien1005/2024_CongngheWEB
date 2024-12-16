<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Computer extends Model
{
    use HasFactory;

    // Các cột có thể được fill khi tạo hoặc cập nhật dữ liệu
    protected $fillable = [
        'computer_name',
        'model',
        'operating_system',
        'processor',
        'memory',
        'available'
    ];
}
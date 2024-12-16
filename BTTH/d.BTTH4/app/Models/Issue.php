<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        'computer_id',
        'reported_by',
        'reported_date',
        'description',
        'urgency',
        'status'
    ];

    /**
     * Quan hệ BelongsTo với bảng computers
     * Một vấn đề thuộc về một máy tính cụ thể.
     */
    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }
}
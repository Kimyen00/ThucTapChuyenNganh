<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    use HasFactory;

    protected $table = 'phongs';

    protected $fillable = [
        'ten_phong',
        'loai_phong_id',
        'trang_thai',
        'ghi_chu'
    ];

    // --- QUAN HỆ ---
    
    // Một phòng thuộc về một loại phòng
    public function loaiPhong()
    {
        return $this->belongsTo(LoaiPhong::class, 'loai_phong_id');
    }
}
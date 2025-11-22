<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TienNghiPhong extends Model
{
    use HasFactory;

    protected $table = 'tien_nghi_phongs';

    protected $fillable = [
        'ten_tien_nghi',
        'mo_ta',
        'icon'
    ];
    
    // Mối quan hệ với Loại Phòng (Nhiều - Nhiều) sẽ được khai báo sau khi làm bảng trung gian
}
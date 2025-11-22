<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    
    // Tên bảng (tùy chọn, mặc định sẽ là khach_hangs)
    protected $table = 'khach_hangs'; 

    // Các cột có thể được gán giá trị hàng loạt (Mass Assignable)
    protected $fillable = [
        'ten_khach_hang',
        'email',
        'so_dien_thoai',
        'dia_chi',
    ];
    
    public function datPhongs()
    {
        // KhachHang có nhiều DatPhong
        return $this->hasMany(DatPhong::class, 'khach_hang_id');
    }
}
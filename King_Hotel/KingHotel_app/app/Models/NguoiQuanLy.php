<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // ⭐ Kế thừa cái này để Đăng nhập được
use Illuminate\Notifications\Notifiable;

class NguoiQuanLy extends Authenticatable
{
    use HasFactory, Notifiable;

    // Tên bảng trong Database
    protected $table = 'nguoi_quan_lies';

    // Các cột được phép thêm dữ liệu hàng loạt
    protected $fillable = [
        'ten_quan_ly',
        'email',
        'so_dien_thoai',
        'chuc_vu',
        'mat_khau', // Lưu ý: Mật khẩu phải được Hash khi lưu
    ];

    // Các cột cần ẩn đi khi trả về dữ liệu (Bảo mật)
    protected $hidden = [
        'mat_khau',
        'remember_token',
    ];

    // Nên phải khai báo hàm này để Laravel biết cột nào chứa mật khẩu.
    public function getAuthPassword()
    {
        return $this->mat_khau;
    }


    // Một Người quản lý có thể xử lý nhiều Đặt phòng
    public function datPhongs()
    {
        return $this->hasMany(DatPhong::class, 'nguoi_quan_ly_id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatPhong extends Model
{
    use HasFactory;

    protected $table = 'dat_phongs';

    protected $fillable = [
        'khach_hang_id',
        'nguoi_quan_ly_id',
        'thoi_gian_den',
        'thoi_gian_di',
        'so_nguoi_o',
        'tien_coc',
        'trang_thai',
        'ghi_chu'
    ];

    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'khach_hang_id');
    }

    public function nguoiQuanLy()
    {
        return $this->belongsTo(NguoiQuanLy::class, 'nguoi_quan_ly_id');
    }
}
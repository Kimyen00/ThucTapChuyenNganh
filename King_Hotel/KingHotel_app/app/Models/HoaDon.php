<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;

    protected $table = 'hoa_dons';

    protected $fillable = [
        'dat_phong_id',
        'tong_tien',
        'phuong_thuc_tt',
        'ngay_thanh_toan',
        'trang_thai',
        'ghi_chu'
    ];

   
    public function datPhong()
    {
        return $this->belongsTo(DatPhong::class, 'dat_phong_id');
    }
}
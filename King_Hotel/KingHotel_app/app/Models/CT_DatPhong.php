<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CT_DatPhong extends Model
{
    use HasFactory;
    protected $table = 'chitiet_dat_phongs';
    protected $fillable = ['dat_phong_id', 'phong_id', 'gia_thuc_te'];
    
    // Quan hệ để lấy thông tin Phòng
    public function phong() {
        return $this->belongsTo(Phong::class, 'phong_id');
    }
}
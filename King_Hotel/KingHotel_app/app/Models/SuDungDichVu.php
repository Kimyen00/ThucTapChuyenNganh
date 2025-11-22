<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuDungDichVu extends Model
{
    use HasFactory;
    protected $table = 'sudung_dich_vus';
    protected $fillable = ['dat_phong_id', 'dich_vu_id', 'so_luong', 'ngay_su_dung'];
    
    // Quan hệ lấy tên Dịch vụ
    public function dichVu() {
        return $this->belongsTo(DichVu::class, 'dich_vu_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CT_TienNghiPhong extends Model
{
    use HasFactory;
    protected $table = 'ct_tien_nghis';
    protected $fillable = ['loai_phong_id', 'tien_nghi_phong_id'];
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dich_vus', function (Blueprint $table) {
            $table->id();
            $table->string('ten_dich_vu', 150); // Tên dịch vụ
            $table->text('mo_ta')->nullable();  // Mô tả chi tiết
            $table->decimal('don_gia', 10, 0); // Giá tiền (VNĐ thường không cần số lẻ thập phân)
            $table->string('don_vi_tinh', 50); // Ví dụ: Lượt, Kg, Chai, Giờ
            $table->boolean('trang_thai')->default(1); // 1: Đang hoạt động, 0: Ngừng cung cấp
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dich_vus');
    }
};
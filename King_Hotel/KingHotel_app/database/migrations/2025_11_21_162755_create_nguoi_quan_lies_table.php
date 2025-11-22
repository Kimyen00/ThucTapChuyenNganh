<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nguoi_quan_lies', function (Blueprint $table) {
            $table->id();
            $table->string('ten_quan_ly', 150);
            $table->string('email', 100)->unique(); // Email không được trùng
            $table->string('so_dien_thoai', 15)->nullable();
            $table->string('chuc_vu', 50)->nullable(); // Ví dụ: Quản lý, Lễ tân...
            $table->string('mat_khau'); // Mật khẩu
            $table->rememberToken(); // Để chức năng "Ghi nhớ đăng nhập" hoạt động
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nguoi_quan_lies');
    }
};
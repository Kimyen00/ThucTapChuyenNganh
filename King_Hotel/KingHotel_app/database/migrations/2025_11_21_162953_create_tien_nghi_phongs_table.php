<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tien_nghi_phongs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_tien_nghi', 100); // Ví dụ: Wifi tốc độ cao, Tivi 4K...
            $table->text('mo_ta')->nullable(); // Mô tả thêm (nếu cần)
            $table->string('icon', 50)->nullable(); // Lưu class icon (ví dụ: fa-wifi) để hiển thị cho đẹp
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tien_nghi_phongs');
    }
};
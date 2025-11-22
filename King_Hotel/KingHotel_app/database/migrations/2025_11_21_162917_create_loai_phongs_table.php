<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loai_phongs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_loai', 100); // Ví dụ: Deluxe, Standard, VIP
            $table->decimal('don_gia', 12, 0); // Giá theo đêm
            $table->integer('so_nguoi'); // Sức chứa (2 người, 4 người...)
            $table->text('mo_ta')->nullable(); // Mô tả phòng
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loai_phongs');
    }
};
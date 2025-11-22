<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('ct_tien_nghis', function (Blueprint $table) {
            $table->id();
            // Khóa ngoại nối bảng LOAI_PHONG
            $table->foreignId('loai_phong_id')->constrained('loai_phongs')->onDelete('cascade');
            
            // Khóa ngoại nối bảng TIEN_NGHI_PHONG
            $table->foreignId('tien_nghi_phong_id')->constrained('tien_nghi_phongs')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_t__tien_nghi_phongs');
    }
};

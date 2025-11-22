<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('phongs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_phong', 50); 
            
            $table->foreignId('loai_phong_id')->constrained('loai_phongs')->onDelete('cascade');
            
            $table->integer('trang_thai')->default(0); 
            // Quy ước: 0 = Phòng Trống, 1 = Đang có khách, 2 = Đang dọn dẹp/Bảo trì
            
            $table->text('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('phongs');
    }
};
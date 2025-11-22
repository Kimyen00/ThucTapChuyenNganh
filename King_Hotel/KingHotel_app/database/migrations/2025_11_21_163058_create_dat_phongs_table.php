<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dat_phongs', function (Blueprint $table) {
            $table->id();
            
            // Khóa ngoại liên kết với Khách hàng
            $table->foreignId('khach_hang_id')->constrained('khach_hangs')->onDelete('cascade');
            
            // Khóa ngoại liên kết với Người quản lý (có thể null nếu khách đặt online chưa ai duyệt)
            $table->foreignId('nguoi_quan_ly_id')->nullable()->constrained('nguoi_quan_lies');

            $table->dateTime('thoi_gian_den'); // Check-in dự kiến
            $table->dateTime('thoi_gian_di');  // Check-out dự kiến
            $table->integer('so_nguoi_o')->default(1);
            
            $table->decimal('tien_coc', 12, 0)->default(0); // Tiền đặt cọc
            $table->integer('trang_thai')->default(0); 
           

            $table->text('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dat_phongs');
    }
};
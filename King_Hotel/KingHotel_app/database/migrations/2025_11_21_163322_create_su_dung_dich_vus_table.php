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
        Schema::create('su_dung_dich_vus', function (Blueprint $table) {
            $table->id();
            // Khách nào đặt? (Thông qua đơn đặt phòng)
            $table->foreignId('dat_phong_id')->constrained('dat_phongs')->onDelete('cascade');
            
            // Dùng dịch vụ gì?
            $table->foreignId('dich_vu_id')->constrained('dich_vus');
            
            $table->integer('so_luong')->default(1); // Số lượng (VD: 2 chai nước)
            $table->dateTime('ngay_su_dung'); // Thời điểm gọi dịch vụ
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('su_dung_dich_vus');
    }
};

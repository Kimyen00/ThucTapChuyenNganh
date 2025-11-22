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
        Schema::create('c_t__dat_phongs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dat_phong_id')->constrained('dat_phongs')->onDelete('cascade');
        
            // Cụ thể là phòng nào (P101, P102...)
            $table->foreignId('phong_id')->constrained('phongs');
            
            // Giá thực tế tại thời điểm đặt (đề phòng giá gốc thay đổi)
            $table->decimal('gia_thuc_te', 12, 0); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_t__dat_phongs');
    }
};

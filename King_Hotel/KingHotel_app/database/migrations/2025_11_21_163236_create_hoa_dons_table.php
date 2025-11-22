<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('dat_phong_id')->constrained('dat_phongs')->onDelete('cascade');
            
            $table->decimal('tong_tien', 15, 0);
            $table->string('phuong_thuc_tt', 50)->nullable(); 
            $table->dateTime('ngay_thanh_toan')->nullable();
            
            $table->integer('trang_thai')->default(0); 
            
            $table->text('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};
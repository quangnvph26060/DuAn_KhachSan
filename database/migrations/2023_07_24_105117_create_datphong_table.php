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
        Schema::create('datphong', function (Blueprint $table) {
            $table->id();
            $table->string('ten_kh');
            $table->string('sdt_kh');
            $table->string('dia_chi');
            $table->string('email')->unique();
            $table->date('ngay_den')->nullable();
            $table->date('ngay_di')->nullable();
            $table->integer('so_luong_khach');
            $table->string('ghi_chu');
            $table->tinyInteger('trang_thai_thanh_toan')->default(1);
            $table->tinyInteger('trang_thai_dat_phong')->default(1);
            $table->foreignId('id_phong')->constrained('phong');
            $table->foreignId('id_taikhoan')->constrained('taikhoan');
            $table->foreignId('id_dichvu')->constrained('dichvu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datphong');
    }
};

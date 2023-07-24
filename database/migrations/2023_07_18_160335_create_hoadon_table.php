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
        Schema::create('hoadon', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('pttt')->default(1);
            $table->float('tong_tien');
            $table->date('ngay_lap_hoadon');
            $table->foreignId('id_taikhoan')->constrained('taikhoan');
            $table->foreignId('id_dat_phong')->constrained('datphong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoadon');
    }
};

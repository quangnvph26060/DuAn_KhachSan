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
        Schema::create('phong', function (Blueprint $table) {
            $table->id();
            $table->string('ten_phong');
            $table->integer('gia_phong');
            $table->integer('giam_gia');
            $table->tinyInteger('trang_thai')->default(1);
            $table->tinyInteger('noi_bat')->default(1);
            $table->string('mo_ta');
            $table->string('hinh_anh');
            $table->foreignId('id_loaiphong')->constrained('loaiphong');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phong');
    }
};

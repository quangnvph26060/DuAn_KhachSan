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
        Schema::create('taikhoan', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten');
            $table->string('password');
            $table->string('sdt');
            $table->string('dia_chi');
            $table->string('email')->unique();
            $table->string('cmnd')->unique();
            $table->tinyInteger('gioi_tinh')->default(1);
            $table->tinyInteger('phan_quyen')->default(1);
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taikhoan');
    }
};

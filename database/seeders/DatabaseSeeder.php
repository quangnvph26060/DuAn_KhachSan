<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            BannerSeeder::class,
            LoaiPhongSeeder::class,
            PhongSeeder::class,
            TaiKhoanSeeder::class,
            DichVuSeeder::class,
            DatPhongSeeder::class,
            HoaDonSeeder::class,
            
            GioHangSeeder::class,
            UserSeeder::class,

        ]);
    }
}

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
            KhachHangSeeder::class,
            DichVuSeeder::class,
            DatPhongSeeder::class,
<<<<<<< HEAD
            HoaDonSeeder::class
=======
            UserSeeder::class
>>>>>>> 8bb3671666a41c7a4196131864c02afeb87ca3fa
        ]);
    }
}

<?php

namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= []; // mảng rỗng
        for ($i = 0 ; $i<5 ; $i++){
            $data[] = [
                'pttt'=> 1,
                'tong_tien'=>120000,
                'ngay_lap_hoadon'=>'2023/11/30',
                'id_kh'=>9,
                'id_dat_phong'=>26,
            ];
        }
        DB::table('hoadon')->insert($data);
    }
}

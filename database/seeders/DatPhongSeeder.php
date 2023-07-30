<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatPhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = []; // mảng rỗng
        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'ten_kh' => 'văn a',
                'sdt_kh' => '09823423',
                'dia_chi' => ' hà nội',
                'email' => 'vana' . $i . '@gmail.com',
                'ngay_den' => '2023/10/12',
                'ngay_di' => '2023/10/15',
                'so_luong_khach' => 5,
                'ghi_chu' => 'không có gì ',
                'trang_thai_thanh_toan' => 1,
                'trang_thai_dat_phong' => 1,
                'id_phong' => 1,
                'id_taikhoan' => 4,
                'id_dichvu' => 1


            ];
        }
        DB::table('datphong')->insert($data);
    }
}

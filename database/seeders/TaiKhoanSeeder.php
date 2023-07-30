<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data= []; // mảng rỗng
        for ($i = 0 ; $i<5 ; $i++){
            $data[] = [
                'ho_ten'=> 'nguyễn văn a',
                'password'=>bcrypt('abc123'),
                'sdt'=>'092345345',
                'dia_chi'=>'hà nội',
                'email'=>'nguyenvana '.$i. '@gmail.com',
                'cmnd'=>'0012033454563'.$i,
                'gioi_tinh'=>1,
                'phan_quyen'=>1
            ];
        }

       
        DB::table('taikhoan')->insert($data);


        // DB::table('taikhoan')->insert([
        //     'ho_ten'=> 'nguyễn văn a',
        //     'mat_khau'=>bcrypt('123456'),
        //     'sdt'=>'092345345',
        //     'dia_chi'=>'hà nội',
        //     'email'=>'namntph26026@fpt.edu.vn',
        //     'cmnd'=>'0012033454512',
        //     'gioi_tinh'=>1,
        //     'phan_quyen'=>1
        // ]);
    }
}

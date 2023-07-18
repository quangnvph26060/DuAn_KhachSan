<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoaiPhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= []; // mảng rỗng
        for ($i = 0 ; $i<5 ; $i++){
            $data[] = [
                'loaiphong'=> 'Phòng'. $i,
            ];
        }
        DB::table('loaiphong')->insert($data);
    }
}

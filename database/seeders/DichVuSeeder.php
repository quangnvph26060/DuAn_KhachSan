<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DichVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= []; // mảng rỗng
        for ($i = 0 ; $i<5 ; $i++){
            $data[] = [
                'ten_dichvu'=> Str::random(10),
                'mota'=>Str::random(10),
                'gia'=>1234,
            ];
        }
        DB::table('dichvu')->insert($data);
    }
}

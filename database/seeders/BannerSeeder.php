<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= []; // mảng rỗng
        for ($i = 0 ; $i<5 ; $i++){
            $data[] = [
                'banner'=> Str::random(10),
            ];
        }
        DB::table('banner')->insert($data);
    }
}

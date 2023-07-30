<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $data= []; // mảng rỗng
        // for ($i = 0 ; $i<5 ; $i++){
        //     $data[] = [
        //         'name'=>"Văn a",
        //         'email'=>'nguyenvana '.$i. '@gmail.com',
        //         'password'=>"123"
        //     ];
        // }
        // DB::table('users')->insert($data);

            DB::table('users')->insert([
                'name'=>"nam1",
                'email'=>'nguyenvana@gmail.com12',
                'password'=>bcrypt('123456')
        ]);
    }
}

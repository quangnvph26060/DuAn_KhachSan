<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class PhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= []; // mảng rỗng
//        $table->string('ten_phong');
//        $table->integer('gia_phong');
//        $table->integer('giam_gia');
//        $table->tinyInteger('trang_thai')->default(1);
//        $table->string('mo_ta');
//        $table->string('hinh_anh');
//        $table->foreignId('id_loaiphong')->constrained('loaiphong');
        for ($i = 0 ; $i<5 ; $i++){
            $data[] = [
                'ten_phong'=> 'Phòng'. $i,
                'gia_phong'=>1000,
                'giam_gia'=>9900,
                'trang_thai'=>1,
                'noi_bat'=>1,
                'mo_ta'=>'phong dep',
                'hinh_anh'=>'anh1.jpg',
                'id_loaiphong'=>1
            ];
        }
        DB::table('phong')->insert($data);
    }
}

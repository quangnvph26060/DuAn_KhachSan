<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table="phong";

    public function loaiphong(){
        return $this->belongsTo('App\Models\CategoryModel','id_loaiphong','id');
    }
}

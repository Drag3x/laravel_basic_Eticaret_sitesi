<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = "products";
    public $timestamps = false;

    public function kategoribul(){
        return $this->hasOne(Kategori::class,'id','product_kat_id');
    }

    public function kategoriyegoreürüncek(){
        return $this->hasMany(Kategori::class,'id','product_kat_id');
    }
}

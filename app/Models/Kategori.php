<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategoris";
    public $timestamps = false;

    protected $fillable = ["parent_id","kategori_ad","kategori_selflink"];
    protected $guarded = ["id"];

}

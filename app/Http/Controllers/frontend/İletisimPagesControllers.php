<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\referanlar;
use Illuminate\Http\Request;

class İletisimPagesControllers extends Controller
{
    public function index(){
        $ref = referanlar::all();
        return view("frontend.iletisim.iletisim")->with('ref',$ref);
    }

    public function iletisimformPost(){
        dd("Test");
    }
}


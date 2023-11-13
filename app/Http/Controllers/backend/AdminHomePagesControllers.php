<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminHomePagesControllers extends Controller
{
    public function index(){
        $productlist = DB::table('products')->limit(3)->get();
        return view("backend.home.adminhome",compact('productlist'));
    }
}

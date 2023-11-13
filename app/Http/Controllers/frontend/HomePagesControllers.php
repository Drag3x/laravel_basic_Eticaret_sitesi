<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePagesControllers extends Controller
{
    public function index(){
        //Slider Verisi
        $sliderdata = slider::all();
        $betseller = DB::table('products')->where('betseller' ,1)->orderByDesc("id")->limit(5)->get();
        //Son eklene ürün
        //$sürünliste = DB::table('products')->orderByDesc("id")->limit(5)->get();
        $ürünlis = product::join('kategoris', 'products.product_kat_id', '=', 'kategoris.id')->limit(4)->get();
        $bloglistesi = DB::table('blogs')->orderByDesc("id")->limit(5)->get();
        //Referanslar
        $referanslistesi = DB::table('referanlars')->orderByDesc("id")->limit(5)->get();

        //tabkategoriyegöreürünliste
        //print_r(product::find(5)

        return view("frontend.home.homeindex")->with(['slider' => $sliderdata,'sürünliste' => $ürünlis,"betseller"=>$betseller,"blogliste"=>$bloglistesi,"ref" =>$referanslistesi,"product"=>product::class]);
    }

    public function kurumsalDetay($selflink){
        $kurumsaldetay = DB::table("kurumsals")->where('kurumsal_selflink',$selflink)->first();
        return view("frontend.kurumsal.kurumsal")->with('kurumsaldetay',$kurumsaldetay);
    }

}

<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\product;
use Illuminate\Http\Request;

class ProductPagesControllers extends Controller
{
    public function productlist($kategoriselflink){
        $kategoribul = Kategori::where("kategori_selflink",$kategoriselflink)->firstOrFail();
        $kategoriId = $kategoribul->id;
        $ürünListesi = product::query()->where('product_kat_id',$kategoriId)->paginate(10);
        return view("frontend.product.product_category_list")->with(['ürünlistesi' => $ürünListesi,"ürünkategoriad"=>$kategoribul->kategori_ad]);
    }

    public function productdetaillist($selflink){
        $bul = product::where("product_selflink",$selflink)->firstOrFail();
        return view("frontend.product.product_detail")->with('productcek',$bul);
    }

}

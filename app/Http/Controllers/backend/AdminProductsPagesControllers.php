<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminProductsPagesControllers extends Controller
{
    public function index(){
        $productslist = product::query()->with(["kategoribul"])->get();
        return view("backend.product.productindex",compact('productslist'));
    }

    public function productEkleGet(){
        $categories = DB::table('kategoris')->where('parent_id', '=', 0)->get();
        $subcategories = DB::table('kategoris')->where('parent_id', '!=', 0)->get();
        $allkategori = Kategori::all();
        return view("backend.product.product_ekle",compact('allkategori','categories','subcategories'));
    }

    public function productEklePost(Request $req){

        $req->validate([
            "product_kat_id" => ["required"],
            "product_name" => ["required"],
            "product_text" => ["required"],
            "product_images" => ["required"],
            "product_money" => ["required"]
        ]);

        $resim = "";

        if($req->hasFile('product_images')){ /* resim geldi mi */
            $imagename = Str::slug($req->product_name,"-").'.'.$req->file("product_images")->getClientOriginalExtension();
            $req->file("product_images")->move(public_path('/assets/images/product'),$imagename);
            $resim = $imagename;
        }

        $deger = 0;

        $products = new product();
        $products->product_kat_id = $req->input('product_kat_id');
        $products->product_name = $req->input('product_name');
        $products->product_text = $req->input('product_text');
        $products->product_money = $req->input('product_money');
        $products->product_images = $resim;
        $products->betseller = $req->input('betseller');
        $products->coksatan = $req->input('coksatan');
        $products->product_selflink = Str::slug($req->input('product_name'),'-');
        $sonuc = $products->save();

        if($sonuc){
            alert()->success('Başarılı','Başarıyla Eklendiniz...');
            return redirect(route('admin.product'));
        }
        //return view("backend.blogs.blog_ekle");
    }

    public function productSil($id){
        $sil = product::where("id",$id)->delete();
        if($sil){
            alert()->success('Başarılı','Başarıyla Sildiniz...');
            return redirect(route('admin.product'));
        }
    }

    public function productGuncelleGet($id){
        $productkey = product::where("id",$id)->firstOrFail();
        $categories = DB::table('kategoris')->where('parent_id', '=', 0)->get();
        $subcategories = DB::table('kategoris')->where('parent_id', '!=', 0)->get();
        $allkategori = Kategori::all();
        return view("backend.product.product_guncelle",compact('allkategori','categories','subcategories','productkey'));
    }

}

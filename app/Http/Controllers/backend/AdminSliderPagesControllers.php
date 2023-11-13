<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminSliderPagesControllers extends Controller
{
    public function index(){
        $sliderall = slider::all();
        return view("backend.slider.sliderindex",compact('sliderall'));
    }

    public function sliderEkleGet(){
        return view("backend.slider.slider_ekle");
    }

    public function sliderEklePost(Request $req){
        $req->validate([
            "slider_baslik" => ["required"],
            "slider_icerik" => ["required"],
            "slider_resim" => ["required"]
        ]);

        $resim = "";

        if($req->hasFile('slider_resim')){ /* resim geldi mi */
            $imagename = Str::slug($req->slider_baslik,"-").'.'.$req->file("slider_resim")->getClientOriginalExtension();
            $req->file("slider_resim")->move(public_path('/assets/images/slider'),$imagename);
            $resim = $imagename;
        }

        $sliderEkle = new slider();
        $sliderEkle->slider_baslik = $req->input('slider_baslik');
        $sliderEkle->slider_icerik = $req->input('slider_icerik');
        $sliderEkle->slider_resim = $resim;
        $sliderEkle->slider_btn = $req->input('slider_btn');
        $sonuc = $sliderEkle->save();

        if($sonuc){
            alert()->success('Başarılı','Başarıyla Eklendiniz...');
            return redirect(route('admin.slider'));
        }
        //return view("backend.blogs.blog_ekle");
    }

    public function sliderSil($id){
        $sil = slider::where("id",$id)->delete();
        if($sil){
            alert()->success('Başarılı','Başarıyla Sildiniz...');
            return redirect(route('admin.slider'));
        }
    }

    public function sliderGuncelleGet($id){
        $slidercek = slider::where("id",$id)->firstOrFail();
        return view("backend.slider.slider_duzenle",compact('slidercek'));
    }

    public function sliderGuncellePost(Request $req,$id){

        $slidercek = slider::where("id",$id)->firstOrFail();

        $resim = "";
        if($req->hasFile('slider_resim')){ /* resim geldi mi */
            $imagename = Str::slug($req->slider_baslik,"-").'.'.$req->file("slider_resim")->getClientOriginalExtension();
            $req->file("slider_resim")->move(public_path('/assets/images/slider'),$imagename);
            $resim = $imagename;
        }else{
            $resim = $req->input("slider_resim");
        }

        $gnc = slider::where("id",$id)->update([
            "slider_baslik" => $req->input('slider_baslik'),
            "slider_icerik" => $req->input('slider_icerik'),
            "slider_resim" => $resim,
            "slider_btn" => $req->input('slider_btn')
        ]);

        if($gnc){
            alert()->success('Başarılı','Başarıyla Güncellediniz...');
            return redirect(route('admin.slider'));
        }
        //return view("backend.blogs.blog_ekle");
    }


}

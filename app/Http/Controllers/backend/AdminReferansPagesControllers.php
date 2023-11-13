<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\referanlar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminReferansPagesControllers extends Controller
{
    public function index(){
        $refall = referanlar::all();
        return view("backend.referanslar.referansindex",compact('refall'));
    }

    public function referansEkleGet(){
        return view("backend.referanslar.referans_ekle");
    }

    public function referansEklePost(Request $req){
        $req->validate([
            "referans_ad" => ["required"],
            "referans_resim" => ["required"]
        ]);

        $resim = "";

        if($req->hasFile('referans_resim')){ /* resim geldi mi */
            $imagename = Str::slug($req->referans_ad,"-").'.'.$req->file("referans_resim")->getClientOriginalExtension();
            $req->file("referans_resim")->move(public_path('/assets/images/referans'),$imagename);
            $resim = $imagename;
        }

        $refekle = new referanlar();
        $refekle->referans_ad = $req->input('referans_ad');
        $refekle->referans_resim = $resim;
        $sonuc = $refekle->save();

        if($sonuc){
            alert()->success('Başarılı','Başarıyla Eklendiniz...');
            return redirect(route('admin.referanslar'));
        }
        //return view("backend.blogs.blog_ekle");
    }

    public function referansSil($id){
        $sil = referanlar::where("id",$id)->delete();
        if($sil){
            alert()->success('Başarılı','Başarıyla Sildiniz...');
            return redirect(route('admin.referanslar'));
        }
    }


    public function referansGuncelleGet($id){
        $refcek = referanlar::where("id",$id)->firstOrFail();
        return view("backend.referanslar.referans_duzenle",compact('refcek'));
    }

    public function referansGuncellePost(Request $req,$id){

        $resim = "";

        if($req->hasFile('referans_resim')){ /* resim geldi mi */
            $imagename = Str::slug($req->referans_ad,"-").'.'.$req->file("referans_resim")->getClientOriginalExtension();
            $req->file("referans_resim")->move(public_path('/assets/images/referans'),$imagename);
            $resim = $imagename;
        }else{
            $resim = $req->input('referans_resim');
        }

        $ref = referanlar::where("id",$id)->update([
            "referans_ad" => $req->input('referans_ad'),
            "referans_resim" => $resim
        ]);


        if($ref){
            alert()->success('Başarılı','Başarıyla Güncellediniz...');
            return redirect(route('admin.referanslar'));
        }
        //return view("backend.blogs.blog_ekle");
    }


}

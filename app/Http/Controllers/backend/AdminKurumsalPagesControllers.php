<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\kurumsal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminKurumsalPagesControllers extends Controller
{
    public function index(){
        $allkurumsal = kurumsal::query()->get();
        return view("backend.kurumsal.kurumsalindex",compact('allkurumsal'));
    }

    public function kurumsalEkleGet(){
        return view("backend.kurumsal.kurumsal_ekle");
    }


    public function kurumsalEklePost(Request $req){
        $req->validate([
            "kurumsal_baslik" => ["required"],
            "kurumsal_icerik" => ["required"],
            "kurumsal_resim" => ["required"]
        ]);

        $resim = "";

        if($req->hasFile('kurumsal_resim')){ /* resim geldi mi */
            $imagename = Str::slug($req->kurumsal_baslik,"-").'.'.$req->file("kurumsal_resim")->getClientOriginalExtension();
            $req->file("kurumsal_resim")->move(public_path('/assets/images/kurumsal'),$imagename);
            $resim = $imagename;
        }

        $kurumsalEkle = new kurumsal();
        $kurumsalEkle->kurumsal_baslik = $req->input('kurumsal_baslik');
        $kurumsalEkle->kurumsal_icerik = $req->input('kurumsal_icerik');
        $kurumsalEkle->kurumsal_resim = $resim;
        $kurumsalEkle->kurumsal_selflink = Str::slug($req->input('kurumsal_baslik'),'-');
        $sonuc = $kurumsalEkle->save();

        if($sonuc){
            alert()->success('Başarılı','Başarıyla Güncellendiniz...');
            return redirect(route('.kurumsal'));
        }
        //return view("backend.blogs.blog_ekle");
    }

    public function blogSil($id){
        $sil = blog::where("id",$id)->delete();
        if($sil){
            alert()->success('Başarılı','Başarıyla Sildiniz...');
            return redirect(route('.blog'));
        }
    }

    public function kurumsalGuncelleGet($id){
        $kurumsalcek = kurumsal::where("id",$id)->firstOrFail();
        return view("backend.kurumsal.kurumsal_duzenle",compact('kurumsalcek'));
    }

    public function kurumsalGuncellePost(Request $req,$id){

        $blogcek = kurumsal::where("id",$id)->firstOrFail();

        $resim = "";

        if($req->hasFile('kurumsal_resim')){ /* resim geldi mi */
            $imagename = Str::slug($req->kurumsal_baslik,"-").'.'.$req->file("kurumsal_resim")->getClientOriginalExtension();
            $req->file("kurumsal_resim")->move(public_path('/assets/images/kurumsal'),$imagename);
            $resim = $imagename;
        }else{
            $resim = $req->input("eresim");
        }

        $gnc = kurumsal::where("id",$id)->update([
            "kurumsal_baslik" => $req->input('kurumsal_baslik'),
            "kurumsal_icerik" => $req->input('kurumsal_icerik'),
            "kurumsal_resim" => $resim,
            "kurumsal_selflink" => Str::slug($req->input('kurumsal_baslik'),'-')
        ]);

        if($gnc){
            alert()->success('Başarılı','Başarıyla Güncellendiniz...');
            return redirect(route('.kurumsal'));
        }
        //return view("backend.blogs.blog_ekle");
    }

}

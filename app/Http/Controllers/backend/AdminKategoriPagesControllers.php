<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminKategoriPagesControllers extends Controller
{
    public function index(){
        $allkategori = Kategori::query()->get();
        return view("backend.kategoriler.kategoriindex",compact('allkategori'));
    }

    public function kategoriEkleGet(){
        $mainkategori = Kategori::where("parent_id",0)->get();
        return view("backend.kategoriler.kategori_ekle",compact('mainkategori'));
    }

    public function kategoriEklePost(Request $req){
        $req->validate([
           "parent_id" => ["required"],
           "kategori_ad" => ["required","min:3"],
        ]);
        $kategoriEkle = new Kategori();
        $kategoriEkle->parent_id = $req->input('parent_id');
        $kategoriEkle->kategori_ad = $req->input('kategori_ad');
        $kategoriEkle->kategori_selflink = Str::slug($req->input('kategori_ad'),'-');
        $sonuc = $kategoriEkle->save();
        if($sonuc){
            alert()->success('Başarılı','Başarıyla Eklediniz...');
            return redirect(route('admin.kategori'));
        }
    }

    public function kategoriSil($id){
        $sil = Kategori::where("id",$id)->delete();
        if($sil){
            alert()->info('Başarılı','Başarıyla Sildiniz...');
            return redirect(route('admin.kategori'));
        }
    }

    public function kategoriGuncelleGet($id){
        $mainkategori = Kategori::where("parent_id",0)->get();
        $kategori = Kategori::where("id",$id)->firstOrFail();
        return view("backend.kategoriler.kategori_duzenle",compact('kategori','mainkategori'));
    }


    public function kategoriDuzenlePost(Request $req,$id){
        $req->validate([
            "parent_id" => ["required"],
            "kategori_ad" => ["required","min:3"],
        ]);

        $kategoriGnc = Kategori::where("id",$id)->update([
            "kategoriEkle->parent_id" => $req->input('parent_id'),
            "kategoriEkle->kategori_ad" => $req->input('kategori_ad'),
            "kategoriEkle->kategori_selflink" => Str::slug($req->input('kategori_ad'),'-')
        ]);

        if($kategoriGnc){
            alert()->success('Başarılı','Başarıyla Güncellendiniz...');
            return redirect(route('admin.kategori'));
        }
    }

}

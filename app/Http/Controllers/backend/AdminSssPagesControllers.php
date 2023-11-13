<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\sss;
use Illuminate\Http\Request;

class AdminSssPagesControllers extends Controller
{
    public function index(){
        $allsss = sss::query()->get();
        return view("backend.sss.sssindex",compact('allsss'));
    }

    public function sssekleGet(){
        return view("backend.sss.sss_ekle");
    }

    public function ssseklePost(Request $req){

        $req->validate([
            "sss_baslik" => ["required"]
        ]);

        $sssekle = new sss();
        $sssekle->sss_baslik = $req->input('sss_baslik');
        $sssekle->sss_icerik = $req->input('sss_icerik');
        $sonuc = $sssekle->save();
        if($sonuc){
            alert()->success('Başarılı','Başarıyla Eklendi...');
            return redirect(route('admin.sss'));
        }
    }

    public function sssGuncelleGet($id){
        $ssscek = sss::where("id",$id)->firstOrFail();
        return view("backend.sss.sss_duzenle",compact('ssscek'));
    }

    public function ssseGuncellePost(Request $req,$id){
        $sssgnc = sss::where("id",$id)->update([
            "sss_baslik" => $req->input('sss_baslik'),
            "sss_icerik" => $req->input('sss_icerik')
        ]);
        if($sssgnc){
            alert()->success('Başarılı','Başarıyla Güncellendiniz...');
            return redirect(route('admin.sss'));
        }
    }

}

<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\kurumsal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminBlogPagesControllers extends Controller
{
    public function index(){
        $allblog = blog::query()->get();
        return view("backend.blogs.blogindex",compact('allblog'));
    }

    public function blogEkleGet(){
        return view("backend.blogs.blog_ekle");
    }

    public function blogEklePost(Request $req){
        $req->validate([
            "blog_baslik" => ["required"],
            "blog_konu_baslik" => ["required"],
            "blog_icerik" => ["required"],
            "blog_resim" => ["required"]
        ]);

        $resim = "";

        if($req->hasFile('blog_resim')){ /* resim geldi mi */
            $imagename = Str::slug($req->blog_baslik,"-").'.'.$req->file("blog_resim")->getClientOriginalExtension();
            $req->file("blog_resim")->move(public_path('/assets/images/blog'),$imagename);
            $resim = $imagename;
        }

        $blogEkle = new blog();
        $blogEkle->blog_baslik = $req->input('blog_baslik');
        $blogEkle->blog_konu_baslik = $req->input('blog_konu_baslik');
        $blogEkle->blog_icerik = $req->input('blog_icerik');
        $blogEkle->blog_resim = $resim;
        $blogEkle->blog_selflink = Str::slug($req->input('blog_baslik'),'-');
        $sonuc = $blogEkle->save();

        if($sonuc){
            alert()->success('Başarılı','Başarıyla Eklendi...');
            return redirect(route('admin.blog'));
        }
        //return view("backend.blogs.blog_ekle");
    }

    public function blogSil($id){
        $sil = blog::where("id",$id)->delete();
        if($sil){
            alert()->success('Başarılı','Başarıyla Silindi...');
            return redirect(route('admin.blog'));
        }
    }

    public function blogGuncelleGet($id){
        $blogcek = blog::where("id",$id)->firstOrFail();
        return view("backend.blogs.blog_duzenle",compact('blogcek'));
    }


    public function blogGuncellePost(Request $req,$id){
        $blogcek = blog::where("id",$id)->firstOrFail();
        $resim = "";

        if($req->hasFile('blog_resim')){ /* resim geldi mi */
            $imagename = Str::slug($req->blog_baslik,"-").'.'.$req->file("blog_resim")->getClientOriginalExtension();
            $req->file("blog_resim")->move(public_path('/assets/images/blog'),$imagename);
            $resim = $imagename;
        }else{
            $resim = $blogcek->blog_resim;
        }

        $blognc = blog::where("id",$id)->update(
            [
                "blog_baslik" => $req->input('blog_baslik'),
                "blog_konu_baslik" => $req->input('blog_konu_baslik'),
                "blog_icerik" => $req->input('blog_icerik'),
                "blog_resim" => $resim,
                "blog_selflink" => Str::slug($req->input('blog_baslik'),'-')
            ]
        );
        if($blognc){
            alert()->success('Başarılı','Başarıyla Güncellendiniz...');
            return redirect(route('admin.blog'));
        }
    }

}

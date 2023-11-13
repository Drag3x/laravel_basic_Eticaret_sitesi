<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogPagesControllers extends Controller
{
    //Blog Anasayfa Listesi
    public function index(){
        $bloglistesi = blog::query()->orderByDesc('id')->paginate(4);
        return view("frontend.blog.blog")->with('bloglistesi',$bloglistesi);
    }

    //BLog Detay
    public function blogdetay(string $selflink){
        $blogbul = blog::query()->where('blog_selflink',$selflink)->firstOrFail();
        return view("frontend.blog.blog_detay")->with('blogcek',$blogbul);
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = DB::table('kategoris')->where('parent_id', '=', 0)->get();
        $subcategories = DB::table('kategoris')->where('parent_id', '!=', 0)->get();

        $genelAyarlar = DB::table('genelayarlars')->where('id',1)->first();
        $iletsimbilgiler = DB::table('iletisims')->where("id",1)->first();

        //KurumsalSayfalar
        $kurumsalsayfa = DB::table('kurumsals')->get();

        View::share('categorymenu',$categories);
        View::share("subcategoriesmenu",$subcategories);
        View::share('genelayar',$genelAyarlar);
        View::share('iletisim',$iletsimbilgiler);
        View::share('kurumsalsayfalistesi',$kurumsalsayfa);

    }
}

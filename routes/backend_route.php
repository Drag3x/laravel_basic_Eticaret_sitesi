<?php

use Illuminate\Support\Facades\Route;


Route::group(["prefix"=>"admin","as"=>"admin","middleware"=>"auth"],function(){

    //iletisim Route
    Route::match(["post","get"],"/iletisim",[\App\Http\Controllers\backend\contactController::class,'iletisim'])->name('.iletisim');

    //Genel Ayarlar Route
    Route::match(["post","get"],"/genel-ayarlar",[\App\Http\Controllers\backend\genelayarlarController::class,'ayarlar'])->name('.ayarlar');
        Route::get('/',[\App\Http\Controllers\backend\AdminHomePagesControllers::class,'index']);
        //Kategoriler
    Route::group(['prefix'=>"kategori","as"=>".kategori"],function(){
        Route::get('/',[\App\Http\Controllers\backend\AdminKategoriPagesControllers::class,'index']);
        Route::get('/kategori-ekle',[\App\Http\Controllers\backend\AdminKategoriPagesControllers::class,'kategoriEkleGet'])->name('.kategoriekle');
        Route::post('/kategori-ekle',[\App\Http\Controllers\backend\AdminKategoriPagesControllers::class,'kategoriEklePost'])->name('.kategorieklepost');
        Route::get('/kategori-duzenle/{id}',[\App\Http\Controllers\backend\AdminKategoriPagesControllers::class,'kategoriGuncelleGet'])->name('.kategoriGuncelleGet')->whereNumber("id");
        Route::post('/kategori-duzenle/{id}',[\App\Http\Controllers\backend\AdminKategoriPagesControllers::class,'kategoriDuzenlePost'])->name('.kategoriGuncellepost')->whereNumber("id");
        Route::get('/kategori-sil/{id}',[\App\Http\Controllers\backend\AdminKategoriPagesControllers::class,'kategoriSil'])->name('.kategorisil')->whereNumber('id');
    });
        //Blog Bölümü
    Route::group(['prefix'=>"blog","as"=>".blog"],function(){
        Route::get('/',[\App\Http\Controllers\backend\AdminBlogPagesControllers::class,'index']);
        Route::get('/blog-ekle',[\App\Http\Controllers\backend\AdminBlogPagesControllers::class,'blogEkleGet'])->name('.blogekleget');
        Route::post('/blog-ekle',[\App\Http\Controllers\backend\AdminBlogPagesControllers::class,'blogEklePost'])->name('.blogEklePost');
        Route::get('/blog-sil/{id}',[\App\Http\Controllers\backend\AdminBlogPagesControllers::class,'blogSil'])->name('.blogSil')->whereNumber("id");
        Route::get('/blog-guncelle/{id}',[\App\Http\Controllers\backend\AdminBlogPagesControllers::class,'blogGuncelleGet'])->name('.blogGuncelleGet')->whereNumber("id");
        Route::post('/blog-guncelle/{id}',[\App\Http\Controllers\backend\AdminBlogPagesControllers::class,'blogGuncellePost'])->name('.blogGuncellePost');
    });
        //Sss
    Route::group(['prefix'=>"sss","as"=>".sss"],function(){
        Route::get('/',[\App\Http\Controllers\backend\AdminSssPagesControllers::class,'index']);
        Route::get('/sss-ekle',[\App\Http\Controllers\backend\AdminSssPagesControllers::class,'sssekleGet'])->name('.sssekleGet');
        Route::post('/sss-ekle',[\App\Http\Controllers\backend\AdminSssPagesControllers::class,'ssseklePost'])->name('.ssseklePost');
        //Route::get('/blog-sil/{id}',[\App\Http\Controllers\backend\AdminBlogPagesControllers::class,'blogSil'])->name('.blogSil');
        Route::get('/sss-duzenle/{id}',[\App\Http\Controllers\backend\AdminSssPagesControllers::class,'sssGuncelleGet'])->name('.sssGuncelleGet')->whereNumber("id");
        Route::post('/sss-duzenle/{id}',[\App\Http\Controllers\backend\AdminSssPagesControllers::class,'ssseGuncellePost'])->name('.ssseGuncellePost')->whereNumber("id");

    });
        //Kurumsal
    Route::group(['prefix'=>"kurumsal","as"=>".kurumsal"],function(){
        Route::get('/',[\App\Http\Controllers\backend\AdminKurumsalPagesControllers::class,'index']);
        Route::get('/kurumsal-ekle',[\App\Http\Controllers\backend\AdminKurumsalPagesControllers::class,'kurumsalEkleGet'])->name('.kurumsalEkleGet');
        Route::post('/kurumsal-ekle',[\App\Http\Controllers\backend\AdminKurumsalPagesControllers::class,'kurumsalEklePost'])->name('.kurumsalEklePost');
        Route::get('/kurumsal-sil/{id}',[\App\Http\Controllers\backend\AdminKurumsalPagesControllers::class,'kurumsalSil'])->name('.kurumsalSil');
        Route::get('/kurumsal-duzenle/{id}',[\App\Http\Controllers\backend\AdminKurumsalPagesControllers::class,'kurumsalGuncelleGet'])->name('.kurumsalGuncelleGet');
        Route::post('/kurumsal-duzenle/{id}',[\App\Http\Controllers\backend\AdminKurumsalPagesControllers::class,'kurumsalGuncellePost'])->name('.kurumsalGuncellePost');
    });
        //Referanslar
    Route::group(['prefix'=>"referanslar","as"=>".referanslar"],function(){
        Route::get('/',[\App\Http\Controllers\backend\AdminReferansPagesControllers::class,'index']);
        Route::get('/referans-ekle',[\App\Http\Controllers\backend\AdminReferansPagesControllers::class,'referansEkleGet'])->name('.referansEkleGet');
        Route::post('/referans-ekle',[\App\Http\Controllers\backend\AdminReferansPagesControllers::class,'referansEklePost'])->name('.referansEklePost');
        Route::get('/referans-sil/{id}',[\App\Http\Controllers\backend\AdminReferansPagesControllers::class,'referansSil'])->name('.referansSil');
        Route::get('/referans-duzenle/{id}',[\App\Http\Controllers\backend\AdminReferansPagesControllers::class,'referansGuncelleGet'])->name('.referansGuncelleGet');
        Route::post('/referans-duzenle/{id}',[\App\Http\Controllers\backend\AdminReferansPagesControllers::class,'referansGuncellePost'])->name('.referansGuncellePost');
    });
        //Slider
    Route::group(['prefix'=>"slider","as"=>".slider"],function(){
        Route::get('/',[\App\Http\Controllers\backend\AdminSliderPagesControllers::class,'index']);
        Route::get('/slider-ekle',[\App\Http\Controllers\backend\AdminSliderPagesControllers::class,'sliderEkleGet'])->name('.sliderEkleGet');
        Route::post('/slider-ekle',[\App\Http\Controllers\backend\AdminSliderPagesControllers::class,'sliderEklePost'])->name('.sliderEklePost');
        Route::get('/slider-sil/{id}',[\App\Http\Controllers\backend\AdminSliderPagesControllers::class,'sliderSil'])->name('.sliderSil');
        Route::get('/slider-guncelle/{id}',[\App\Http\Controllers\backend\AdminSliderPagesControllers::class,'sliderGuncelleGet'])->name('.sliderGuncelleGet');
        Route::post('/slider-guncelle/{id}',[\App\Http\Controllers\backend\AdminSliderPagesControllers::class,'sliderGuncellePost'])->name('.sliderGuncellePost');

    });
        //Ürünler
    Route::group(['prefix'=>"urunler","as"=>".product"],function(){
        Route::get('/',[\App\Http\Controllers\backend\AdminProductsPagesControllers::class,'index']);
        Route::get('/urun-ekle',[\App\Http\Controllers\backend\AdminProductsPagesControllers::class,'productEkleGet'])->name('.productEkleGet');
        Route::post('/urun-ekle',[\App\Http\Controllers\backend\AdminProductsPagesControllers::class,'productEklePost'])->name('.productEklePost');
        Route::get('/urun-sil/{id}',[\App\Http\Controllers\backend\AdminProductsPagesControllers::class,'productSil'])->name('.productSil');
        Route::get('/urun-guncelle/{id}',[\App\Http\Controllers\backend\AdminProductsPagesControllers::class,'productGuncelleGet'])->name('.productGuncelleGet');
    });

});



Route::get('/test',function(){
    return view('backend.blank.blank');
});
<?php

use Illuminate\Support\Facades\Route;


Route::get("/",[\App\Http\Controllers\frontend\HomePagesControllers::class,'index'])->name('.anasayfa');
Route::get("/iletisim",[\App\Http\Controllers\frontend\İletisimPagesControllers::class,'index'])->name('.iletisim');
Route::post("/iletisim",[\App\Http\Controllers\frontend\İletisimPagesControllers::class,'iletisimformPost']);
Route::get("/blog",[\App\Http\Controllers\frontend\BlogPagesControllers::class,'index'])->name('.blog');
Route::get("/blog-detay/{selflink}",[\App\Http\Controllers\frontend\BlogPagesControllers::class,'blogdetay'])->name('.blogdetay')->whereAlphaNumeric(["string"]);

Route::get("/kurumsal-detay/{selflink}",[\App\Http\Controllers\frontend\HomePagesControllers::class,'kurumsalDetay'])->name('.kurumsalDetay')->whereAlphaNumeric(["string"]);



Route::get("/kategori/{kategoriselflink}",[\App\Http\Controllers\frontend\ProductPagesControllers::class,'productlist'])->name('.productlist')->whereAlphaNumeric(["string"]);
Route::get("/product-detail/{productselflink}",[\App\Http\Controllers\frontend\ProductPagesControllers::class,'productdetaillist'])->name('.productdetaillist')->whereAlphaNumeric(["string"]);


Route::get("/test2",function(){
   return view("frontend.kurumsal.kurumsal");
});
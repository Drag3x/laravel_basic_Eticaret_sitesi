@extends('frontend_layout')
@section('title')
    orta alan
    @endsection

@section('content')

    <section id="billboard" class="overflow-hidden">

        <button class="button-prev">
            <i class="icon icon-chevron-left"></i>
        </button>
        <button class="button-next">
            <i class="icon icon-chevron-right"></i>
        </button>
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                @foreach($slider as $skeys)
                <div class="swiper-slide" style="background-image: url({{ asset("assets/images/slider/".$skeys->slider_resim) }});background-repeat: no-repeat;background-size: cover;background-position: center;">
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="banner-title">{{ $skeys->slider_baslik }}</h2>
                                    <p>{{ $skeys->slider_icerik }}</p>
                                    <div class="btn-wrap">
                                        <a href="{{ $skeys->slider_btn }}" class="btn btn-light btn-medium d-flex align-items-center" tabindex="0">Detay<i class="icon icon-arrow-io"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="featured-products" class="product-store padding-large">
        <div class="container">
            <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
                <h2 class="section-title">Son Eklenen Ürünler</h2>
                <div class="btn-wrap">
                    <a href="shop.html" class="d-flex align-items-center">View all products <i class="icon icon icon-arrow-io"></i></a>
                </div>
            </div>
            <div class="swiper product-swiper overflow-hidden">
                <div class="swiper-wrapper">
                    @foreach($sürünliste as $skeys)
                    <div class="swiper-slide">
                        <div class="product-item">
                            <div class="image-holder">
                                <img src="{{ asset("assets/images/product/".$skeys->product_images) }}" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">Sepete Ekle<i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Hızlı Göz At</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="{{ route('.productdetaillist',["productselflink"=>$skeys->product_selflink]) }}">{{ $skeys->product_name }}</a>
                                </h3>
                                <span class="item-price text-primary">{{ number_format($skeys->product_money,2,',','.')." TL" }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section id="selling-products" class="product-store bg-light-grey padding-large">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Best selling products</h2>
            </div>
            <ul class="tabs list-unstyled">
                @foreach($subcategoriesmenu as $anasubcat)
                <li data-tab-target="#a{{ $anasubcat->id }}" class="active tab">{{ $anasubcat->kategori_ad}}</li>
                @endforeach
            </ul>
            <div class="tab-content">

                @php
                    $x = 0;
                @endphp
                @foreach($subcategoriesmenu as $anasubcat),
                    @php($x++)
                <div id="a{{ $anasubcat->id }}" data-tab-content @if($x == 1) {{ "active" }} @endif>
                    <div class="row d-flex flex-wrap">
                        @foreach($product::where("product_kat_id",$anasubcat->id)->get() as $keysx)
                        <div class="product-item col-lg-3 col-md-6 col-sm-6">
                            <div class="image-holder">
                                <img src="{{ asset("assets/images/product/".$keysx->product_images) }}" alt="Books" class="product-image">
                            </div>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                                    </button>
                                    <button type="button" class="view-btn tooltip
                        d-flex">
                                        <i class="icon icon-screen-full"></i>
                                        <span class="tooltip-text">Quick view</span>
                                    </button>
                                    <button type="button" class="wishlist-btn">
                                        <i class="icon icon-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-detail">
                                <h3 class="product-title">
                                    <a href="{{ route('.productdetaillist',["productselflink"=>$keysx->product_selflink]) }}">{{ $keysx->product_name }}</a>
                                </h3>
                                <div class="item-price text-primary">$55.00</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="testimonials" class="padding-large no-padding-bottom">
        <div class="container">
            <div class="reviews-content">
                <div class="row d-flex flex-wrap">
                    <div class="col-md-2">
                        <div class="review-icon">
                            <i class="icon icon-right-quote"></i>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="swiper testimonial-swiper overflow-hidden">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-detail">
                                        <p>“Dignissim massa diam elementum habitant fames. Id nullam pellentesque nisi, eget cursus dictumst pharetra, sit. Pulvinar laoreet id porttitor egestas dui urna. Porttitor nibh magna dolor ultrices iaculis sit iaculis.”</p>
                                        <div class="author-detail">
                                            <div class="name">Halil kaya</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-detail">
                                        <p>“Dignissim massa diam elementum habitant fames. Id nullam pellentesque nisi, eget cursus dictumst pharetra, sit. Pulvinar laoreet id porttitor egestas dui urna. Porttitor nibh magna dolor ultrices iaculis sit iaculis.”</p>
                                        <div class="author-detail">
                                            <div class="name">Erhan Yenice</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-arrows">
                            <button class="prev-button">
                                <i class="icon icon-arrow-left"></i>
                            </button>
                            <button class="next-button">
                                <i class="icon icon-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="flash-sales" class="product-store padding-large">

        <div class="container">
            <div class="section-header">
                <h2 class="section-title">BetSeller / Cok satan</h2>
            </div>
            <div class="swiper product-swiper flash-sales overflow-hidden">

                <div class="swiper-wrapper">
                    @foreach($betseller as $skeys)
                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="image-holder">
                                    <img src="{{ asset("assets/images/product/".$skeys->product_images) }}" alt="Books" class="product-image">
                                </div>
                                <div class="cart-concern">
                                    <div class="cart-button d-flex justify-content-between align-items-center">
                                        <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                                        </button>
                                        <button type="button" class="view-btn tooltip
                        d-flex">
                                            <i class="icon icon-screen-full"></i>
                                            <span class="tooltip-text">Quick view</span>
                                        </button>
                                        <button type="button" class="wishlist-btn">
                                            <i class="icon icon-heart"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <h3 class="product-title">
                                        <a href="single-product.html">{{ $skeys->product_name }}</a>
                                    </h3>
                                    <span class="item-price text-primary">{{ number_format($skeys->product_money,2,',','.')." TL" }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>

    <hr>
    <section id="latest-blog" class="padding-large">
        <div class="container">
            <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
                <h2 class="section-title">Blog Konuları</h2>
                <div class="btn-wrap align-right">
                    <a href="blog.html" class="d-flex align-items-center">Tümü<i class="icon icon icon-arrow-io"></i>
                    </a>
                </div>
            </div>
            <div class="row d-flex flex-wrap">
                @foreach($blogliste as $bkeys)
                <article class="col-md-4 post-item">
                    <div class="image-holder zoom-effect">
                        <a href="{{ route(".blogdetay",['selflink'=>$bkeys->blog_selflink]) }}">
                            <img src="{{ asset("assets/images/blog/".$bkeys->blog_resim) }}" alt="post" class="post-image">
                        </a>
                    </div>
                    <div class="post-content d-flex">
                        <div class="meta-date">
                            <div class="meta-day text-primary">22</div>
                            <div class="meta-month">Aug-2021</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="{{ route(".blogdetay",['selflink'=>$bkeys->blog_selflink]) }}">{{ $bkeys->blog_baslik }}</a>
                            </h3>
                            <a href="{{ route(".blogdetay",['selflink'=>$bkeys->blog_selflink]) }}" class="blog-categories">{{ $bkeys->blog_konu_baslik }}</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="brand-collection" class="padding-medium bg-light-grey">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between">
                @foreach($ref as $rfkets)
                <img src="{{ asset("assets/images/referans/".$rfkets->referans_resim) }}" alt="phone" class="brand-image">
                @endforeach
            </div>
        </div>
    </section>

    @include('frontend.includes.information')

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush
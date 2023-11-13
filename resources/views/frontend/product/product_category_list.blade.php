@extends('frontend_layout')
@section('title')
    orta alan
@endsection

@section('content')

    <section class="site-banner jarallax min-height300 padding-large" style="background: url({{ asset("frontend/images/hero-image.jpg") }}) no-repeat; background-position: top;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">{{ $ürünkategoriad }}</h1>
                    <div class="breadcrumbs">
              <span class="item">
                <a href="{{ route(".anasayfa") }}">Anasayfa</a>
              </span>
                        <span class="item">Ürün Listeis</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="shopify-grid padding-large">
        <div class="container">
            <div class="row">

                <section id="selling-products" class="col-md-9 product-store">
                    <div class="container">
                        <ul class="tabs list-unstyled">
                            <li data-tab-target="#all" class="active tab">Tümü</li>

                        </ul>
                        <div class="tab-content">
                            <div id="all" data-tab-content class="active">
                                <div class="row d-flex flex-wrap">
                                    @foreach($ürünlistesi as $ülist)
                                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                                        <div class="image-holder">
                                            <img src="{{ asset("assets/images/product/".$ülist->product_images) }}" alt="Books" class="product-image">
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
                                                <a href="single-product.html">{{ $ülist->product_name }}</a>
                                            </h3>
                                            <div class="item-price text-primary">{{ $ülist->product_money}}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <nav class="navigation paging-navigation text-center padding-medium" role="navigation">
                            <div class="pagination loop-pagination d-flex justify-content-center">
                                <a href="#" class="pagination-arrow d-flex align-items-center">
                                    <i class="icon icon-arrow-left"></i>
                                </a>
                                <span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a href="#" class="pagination-arrow d-flex align-items-center">
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </div>
                        </nav>
                    </div>
                </section>

                <aside class="col-md-3">
                    <div class="sidebar">

                        <div class="widgets widget-product-brands">
                            <h5 class="widget-title">Kategoriler</h5>
                            <ul class="product-tags sidebar-list list-unstyled">
                                @foreach ($categorymenu as $categorys)
                                    <li><a href="shop-slider.html" class="item-anchor"><span class="text-primary"> {{ $categorys->kategori_ad }}</span></a></li>
                                    @foreach ($subcategoriesmenu as $subcategorys)
                                        @if ( $subcategorys->parent_id == $categorys->id )
                                            <li class="tags-item">
                                                <a href="{{ route(".productlist",["kategoriselflink"=>$subcategorys->kategori_selflink]) }}">{{ $subcategorys->kategori_ad }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </div>

    <hr>

    @include('frontend.includes.information')

@endsection

@push('customCss')

@endpush

@push('customJs')

@endpush
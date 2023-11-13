@extends('frontend_layout')
@section('title')
    orta alan
    @endsection

@section('content')

    <section class="site-banner jarallax min-height300 padding-large" style="background: url({{ asset("frontend/images/hero-image1.jpg") }}) no-repeat; background-position: top;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Blog Sayfamız</h1>
                    <div class="breadcrumbs">
              <span class="item">
                <a href="{{ route(".anasayfa") }}">Anasayfa /</a>
              </span>
                        <span class="item">Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="latest-blog" class="post-grid padding-large">
        <div class="container">
            <div class="row d-flex flex-wrap">
                @foreach($bloglistesi as $bkets)
                <article class="col-md-4 post-item">
                    <div class="image-holder zoom-effect">
                        <a href="{{ route(".blogdetay",['selflink'=>$bkets->blog_selflink]) }}">
                            <img src="{{ asset("assets/images/blog/".$bkets->blog_resim) }}" alt="post" class="post-image">
                        </a>
                    </div>
                    <div class="post-content d-flex">
                        <div class="meta-date">
                            <div class="meta-day text-primary">05</div>
                            <div class="meta-month">Aug-2023</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="{{ route(".blogdetay",['selflink'=>$bkets->blog_selflink]) }}">{{ $bkets->blog_baslik }}</a>
                            </h3>
                            <a href="{{ route(".blogdetay",['selflink'=>$bkets->blog_selflink]) }}" class="blog-categories">Fashion</a>
                        </div>
                    </div>
                </article>
                @endforeach
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


    @include('frontend.includes.information')

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush
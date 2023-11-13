@extends('frontend_layout')
@section('title')
    orta alan
    @endsection

@section('content')

    <section class="site-banner padding-small bg-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
              <span class="item">
                <a href="{{ route(".anasayfa") }}">Anasayfa /</a>
              </span>
                        <span class="item">
                <a href="{{ route(".blog") }}">Blog /</a>
              </span>
                        <span class="item">{{ $blogcek->blog_baslik  }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main-content d-flex flex-wrap padding-large">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="post-meta">
                        <span class="post-date">Feb 22, 2023</span> / <a href="blog.html" class="blog-categories">Fashion</a>
                    </div>
                    <h1 class="page-title">{{ $blogcek->blog_baslik }}</h1>
                    <div class="feature-image">
                        <img src="{{ asset("assets/images/blog/".$blogcek->blog_resim) }}" alt="post image" class="jarallax-img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="post-content mt-40">
                        <p>{{ $blogcek->blog_icerik }}</p>
                    </div>s
                </div>
            </div>
        </div>
    </div>

    @include('frontend.includes.information')

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush
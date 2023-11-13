@extends('frontend_layout')
@section('title')
    orta alan
@endsection

@section('content')

    <section class="site-banner jarallax padding-large" style="background: url( {{ asset("frontend/images/hero-image.jpg") }} ) no-repeat; background-position: top;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Kurumsal Sayfası</h1>
                    <div class="breadcrumbs">
              <span class="item">
                <a href="{{ route(".anasayfa") }}">Anasayfa /</a>
              </span>
                        <span class="item">Kurumsal Sayfa</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us">
        <div class="container ">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="detail">
                        <div class="display-header">
                            <h2 class="section-title">Test Test</h2>
                           {{ $kurumsaldetay->kurumsal_icerik }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.includes.information')

@endsection

@push('customCss')

@endpush

@push('customJs')

@endpush
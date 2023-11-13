@extends('frontend_layout')
@section('title')
    orta alan
    @endsection

@section('content')

    <section class="site-banner jarallax padding-large" style="background: url( {{ asset("frontend/images/hero-image.jpg") }} ) no-repeat; background-position: top;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">İletişim Sayfası</h1>
                    <div class="breadcrumbs">
              <span class="item">
                <a href="{{ route(".anasayfa") }}">Anasayfa /</a>
              </span>
                        <span class="item">İletişim Bilgilerimiz</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-information padding-large">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-header">
                        <h2 class="section-title">İletişim Bilgileriniz</h2>
                    </div>
                    <div class="contact-detail">
                        <div class="detail-list">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <ul class="list-unstyled list-icon">
                                <li>
                                    <a href="#"><i class="icon icon-phone"></i>{{ $iletisim->phone }}</a>
                                </li>
                                <li>
                                    <a href="mailto:info@yourcompany.com"><i class="icon icon-mail"></i>{{ $iletisim->email }}</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon icon-map-pin"></i>{{ $iletisim->adres }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-links">
                            <h3>Sosyal Medya Hesapları</h3>
                            <ul class="d-flex list-unstyled">
                                <li><a href="#" class="icon icon-facebook"></a></li>
                                <li><a href="#" class="icon icon-twitter"></a></li>
                                <li><a href="#" class="icon icon-instagram"></a></li>
                                <li><a href="#" class="icon icon-youtube-play"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-information">
                        <div class="section-header">
                            <h2 class="section-title">Bize Mesaj Gönderin</h2>
                        </div>
                        <form name="contactform" action="{{ route('.iletisim') }}" method="post" class="contact-form">
                            @Csrf
                            <div class="form-item">
                                <input type="text" minlength="2" name="name" placeholder="İsim ve soyadınız" class="u-full-width bg-light" required>
                                <input type="email" name="email" placeholder="E-mail adresiniz" class="u-full-width bg-light" required>
                                <textarea class="u-full-width bg-light" name="Mesajınız" placeholder="Message" style="height: 180px;" required></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-dark btn-full btn-medium">Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="google-map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://getasearch.com/fmovies"></a>
                <br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 100%;
                    }
                </style>
                <a href="https://www.atakmedya.net">atakmedya.net</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 100%;
                    }
                </style>
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
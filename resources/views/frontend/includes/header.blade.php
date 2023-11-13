
<header id="header">
    <div id="header-wrap">
        <nav class="secondary-nav border-bottom">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-4 header-contact">
                        <p>Telefon <strong>{{ $iletisim->phone }}</strong>
                        </p>
                    </div>
                    <div class="col-md-4 shipping-purchase text-center">
                        <p>400 tl üzeri alışverişlerde ücretsiz kargo</p>
                    </div>
                    <div class="col-md-4 col-sm-12 user-items">
                        <ul class="d-flex justify-content-end list-unstyled">

                            <li>
                                <a href="cart.html">
                                    <i class="icon icon-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    <i class="icon icon-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="primary-nav padding-small">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-2 col-md-2">
                        <div class="main-logo">
                            <a href="index.html">
                                <img src="{{ asset("assets/images/genel/".$genelayar->site_logo) }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <div class="navbar">

                            <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                                <ul class="menu-list">

                                    <li><a href="{{ route(".anasayfa") }}" class="item-anchor" data-effect="About">Anasayfa</a></li>

                                    <li class="menu-item has-sub">
                                        <a href="#" class="item-anchor d-flex align-item-center" data-effect="Pages">Kurumsal<i class="icon icon-chevron-down"></i></a>
                                        <ul class="submenu">
                                            @foreach($kurumsalsayfalistesi as $kskeys)
                                            <li><a href="{{ route(".kurumsalDetay",["selflink" => $kskeys->kurumsal_selflink]) }}" class="item-anchor">{{ $kskeys->kurumsal_baslik }}<span class="text-primary"></span></a></li>
                                            @endforeach
                                        </ul>
                                    </li>


                                    <li class="menu-item has-sub">
                                        <a href="shop.html" class="item-anchor d-flex align-item-center" data-effect="Shop">Kategoriler<i class="icon icon-chevron-down"></i></a>
                                        <ul class="submenu">
                                            @foreach ($categorymenu as $categorys)
                                                <li><a href="javascript:void(0);" class="item-anchor"><span class="text-primary"> {{ $categorys->kategori_ad }}</span></a></li>
                                                @foreach ($subcategoriesmenu as $subcategorys)
                                                    @if ( $subcategorys->parent_id == $categorys->id )
                                                        <li style="padding-left:10px;">
                                                            <a href="{{ route(".productlist",["kategoriselflink"=>$subcategorys->kategori_selflink]) }}" class="item-anchor"><span class="text-primary"> {{ $subcategorys->kategori_ad }}</span></a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </ul>
                                    </li>


                                    <li><a href="{{ route(".blog") }}" class="item-anchor" data-effect="Contact">Blog</a></li>
                                    <li><a href="{{ route(".iletisim") }}" class="item-anchor" data-effect="Contact">İletişim</a></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
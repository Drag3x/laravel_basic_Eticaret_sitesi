<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route("admin") }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Yönetim Paneli
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route("admin.ayarlar") }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Genel Ayarlar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.iletisim") }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>İletişim</p>
                    </a>
                </li>
            </ul>
        </li>

        @php
            $deger = Route::is("admin.kategori");
            echo $deger."asdas";
        @endphp

        <li class="nav-item @if(Route::is("admin.kategori") || Route::is("admin.kategori.kategoriekle")) {{ "menu-is-opening menu-open" }} @endif">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Kategori Bölümü
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">6</span>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display:@if(Route::is(".kategori") || Route::is(".kategori.kategoriekleget")) {{ "block" }} @endif">
                <li class="nav-item">
                    <a href="{{ route("admin.kategori.kategoriekle") }}" class="nav-link @if(Route::is("admin.kategori.kategoriekleget")) {{ "active" }} @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Yeni Kategori Ekle</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.kategori") }}" class="nav-link @if(Route::is("admin.kategori")) {{ "active" }} @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kategori Listele</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item @if(Route::is("admin.blog") || Route::is("admin.blog.blogekleget")) {{ "menu-is-opening menu-open" }} @endif">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Blog
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: @if(Route::is(".blog") || Route::is(".blog.blogekleget")) {{ "block" }} @endif">
                <li class="nav-item">
                    <a href="{{ route('admin.blog.blogekleget') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Yeni Blog Ekle</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.blog") }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>BLog Listesi</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item @if(Route::is("admin.sss") || Route::is("admin.sss.sssekleGet")) {{ "menu-is-opening menu-open" }} @endif">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                    SSS Bölümü
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: @if(Route::is(".sss") || Route::is(".sss.sssekleGet")) {{ "block" }} @endif">
                <li class="nav-item">
                    <a href="{{ route("admin.sss.sssekleGet") }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Yeni SSS</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.sss") }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Listesi</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item @if(Route::is("admin.kurumsal") || Route::is(".kurumsal.kurumsalEkleGet")) {{ "menu-is-opening menu-open" }} @endif">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Kurumsal
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: @if(Route::is(".kurumsal") || Route::is(".kurumsal.kurumsalEkleGet")) {{ "block" }} @endif">
                <li class="nav-item">
                    <a href="{{ route("admin.kurumsal.kurumsalEkleGet") }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Yeni Ekle</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.kurumsal") }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Listesi</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item @if(Route::is("admin.referanslar") || Route::is("admin.referanslar.referansEkleGet")) {{ "menu-is-opening menu-open" }} @endif ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Referans
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: @if(Route::is(".referanslar") || Route::is(".referanslar.referansEkleGet")) {{ "block" }} @endif">
                <li class="nav-item">
                    <a href="{{ route('admin.referanslar.referansEkleGet') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Yeni Referans Ekle</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.referanslar") }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Referans Listesi</p>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item @if(Route::is("admin.slider") || Route::is("admin.slider.sliderEkleGet")) {{ "menu-is-opening menu-open" }} @endif ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Slider
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: @if(Route::is(".slider") || Route::is(".slider.sliderEkleGet")) {{ "block" }} @endif">
                <li class="nav-item">
                    <a href="{{ route('admin.slider.sliderEkleGet') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Yeni Slider Ekle</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.slider") }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Slider Listesi</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item @if(Route::is("admin.product") || Route::is("admin.product.productEkleGet")) {{ "menu-is-opening menu-open" }} @endif ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Ürünler
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: @if(Route::is(".slider") || Route::is(".slider.sliderEkleGet")) {{ "block" }} @endif">
                <li class="nav-item">
                    <a href="{{ route('admin.product.productEkleGet') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Yeni Ürün Ekle</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.product") }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Ürün Listele</p>
                    </a>
                </li>
            </ul>
        </li>



        <li class="nav-header">Oturumu Kapat</li>
        <li class="nav-item">
            <a href="../calendar.html" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Calendar
                    <span class="badge badge-info right">2</span>
                </p>
            </a>
        </li>

    </ul>
</nav>
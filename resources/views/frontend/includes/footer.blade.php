<footer id="footer">
    <div class="container">
        <div class="footer-menu-list">
            <div class="row d-flex flex-wrap justify-content-between">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-menu">
                        <h5 class="widget-title">Hızlı Menü</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item">
                                <a href="{{ route(".iletisim") }}">İletişim Sayfası</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Bilgilendirme </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route(".blog") }}">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Kariyer</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-menu">
                        <h5 class="widget-title">İletişim Bilgileri</h5>
                        <p><a href="#" class="email">{{ $iletisim->email }}</a>
                        </p>
                        <p>7/24 Müşteri Hizmetleri<br>
                            <strong>{{ $iletisim->phone }}</strong>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-menu">
                        <h5 class="widget-title">Bilgilendirme ve SosyalMedya</h5>
                        <p>Cras mattis sit ornare in metus eu amet adipiscing enim. Ullamcorper in orci, ultrices integer eget arcu. Consectetur leo dignissim lacus, lacus sagittis dictumst.</p>
                        <div class="social-links">
                            <ul class="d-flex list-unstyled">
                                <li>
                                    <a href="#">
                                        <i class="icon icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-behance-square"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</footer>
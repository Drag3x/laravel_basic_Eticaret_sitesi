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
                <a href="{{ route(".anasayfa") }}">Home /</a>
              </span>
                        <span class="item">
                <a href="#">Erkek /</a>
              </span>
                        <span class="item">{{ $productcek->product_name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="single-product padding-large">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-preview">
                        <div thumbsSlider="" class="swiper thumb-swiper col-md-3 col-xs-3">
                            <div class="swiper-wrapper d-flex flex-wrap">
                                <div class="swiper-slide">
                                    <img src="{{ asset("assets/images/product/".$productcek->product_images) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper large-swiper overflow-hidden col-md-9 col-xs-9">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset("assets/images/product/".$productcek->product_images) }}" alt="single-product">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-info">
                        <div class="element-header">
                            <h2 itemprop="name" class="product-title">{{ $productcek->product_name }}</h2>
                            <div class="rating-container d-flex align-items-center">
                                <div class="rating" data-rating="1" onclick=rate(1)>
                                    <i class="icon icon-star-full"></i>
                                </div>
                                <div class="rating" data-rating="2" onclick=rate(1)>
                                    <i class="icon icon-star-full"></i>
                                </div>
                                <div class="rating" data-rating="3" onclick=rate(1)>
                                    <i class="icon icon-star-full"></i>
                                </div>
                                <div class="rating" data-rating="4" onclick=rate(1)>
                                    <i class="icon icon-star-half"></i>
                                </div>
                                <div class="rating" data-rating="5" onclick=rate(1)>
                                    <i class="icon icon-star-empty"></i>
                                </div>
                                <span class="rating-count">(3.5)</span>
                            </div>
                        </div>
                        <div class="product-price">
                            <strong>{{ $productcek->product_money }}</strong>
                        </div>
                        <p>{{ $productcek->product_text }}</p>
                        <div class="cart-wrap margin-small">
                            <div class="swatch product-select" data-option-index="1">
                                <h4 class="item-title no-margin">Beden:</h4>
                                <ul class="select-list list-unstyled d-flex">
                                    <li data-value="S" class="select-item">
                                        <a href="#">S</a>
                                    </li>
                                    <li data-value="M" class="select-item">
                                        <a href="#">M</a>
                                    </li>
                                    <li data-value="L" class="select-item">
                                        <a href="#">L</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="action-buttons">
                                <button type="submit" name="add" id="add-to-cart" class="btn btn-medium btn-dark">
                                    <span id="add-to-cart">Sepete Ekle</span>
                                </button>
                                <button type="submit" class="btn btn-medium btn-dark"><i class="icon icon-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-tabs">
        <div class="container">
            <div class="tabs-listing">
                <nav>
                    <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                        <button class="nav-link" id="nav-information-tab" data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab" aria-controls="nav-information" aria-selected="false">Additional information</button>
                        <button class="nav-link" id="nav-shipping-tab" data-bs-toggle="tab" data-bs-target="#nav-shipping" type="button" role="tab" aria-controls="nav-shipping" aria-selected="false">Shipping & Return</button>
                        <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p>Product Description</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.
                        <ul>
                            <li>Donec nec justo eget felis facilisis fermentum.</li>
                            <li>Suspendisse urna viverra non, semper suscipit pede.</li>
                            <li>Aliquam porttitor mauris sit amet orci.</li>
                        </ul> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                    </div>
                    <div class="tab-pane fade" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
                        <p>It is Comfortable and Best</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab">
                        <p>Returns Policy</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                        <p>Shipping</p>
                        <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus. Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                        <div class="review-box review-style d-flex flex-wrap justify-content-between">
                            <div class="review-item d-flex">
                                <div class="image-holder">
                                    <img src="images/review-image1.jpg" alt="review">
                                </div>
                                <div class="review-content">
                                    <div class="rating-container d-flex align-items-center">
                                        <div class="rating">
                                            <i class="icon icon-star-full"></i>
                                        </div>
                                        <div class="rating">
                                            <i class="icon icon-star-full"></i>
                                        </div>
                                        <div class="rating">
                                            <i class="icon icon-star-full"></i>
                                        </div>
                                        <div class="rating">
                                            <i class="icon icon-star-half"></i>
                                        </div>
                                        <div class="rating">
                                            <i class="icon icon-star-empty"></i>
                                        </div>
                                        <span class="rating-count">(3.5)</span>
                                    </div>
                                    <div class="review-header">
                                        <span class="author-name">Tom Johnson</span>
                                        <span class="review-date">– 07/05/2022</span>
                                    </div>
                                    <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus urna duis convallis convallis</p>
                                </div>
                            </div>
                            <div class="review-item d-flex">
                                <div class="image-holder">
                                    <img src="images/review-image2.jpg" alt="review">
                                </div>
                                <div class="review-content">
                                    <div class="rating-container d-flex align-items-center">
                                        <div class="rating">
                                            <i class="icon icon-star-full"></i>
                                        </div>
                                        <div class="rating">
                                            <i class="icon icon-star-full"></i>
                                        </div>
                                        <div class="rating">
                                            <i class="icon icon-star-full"></i>
                                        </div>
                                        <div class="rating">
                                            <i class="icon icon-star-half"></i>
                                        </div>
                                        <div class="rating">
                                            <i class="icon icon-star-empty"></i>
                                        </div>
                                        <span class="rating-count">(3.5)</span>
                                    </div>
                                    <div class="review-header">
                                        <span class="author-name">Jenny Willis</span>
                                        <span class="review-date">– 07/05/2022</span>
                                    </div>
                                    <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus urna duis convallis convallis</p>
                                </div>
                            </div>
                        </div>
                        <div class="add-review margin-small">
                            <h3>Add a review</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <div class="review-rating">
                                <span>Your rating *</span>
                                <div class="rating-container d-flex align-items-center">
                                    <div class="rating" data-rating="1">
                                        <i class="icon icon-star-empty"></i>
                                    </div>
                                    <div class="rating" data-rating="2">
                                        <i class="icon icon-star-empty"></i>
                                    </div>
                                    <div class="rating" data-rating="3">
                                        <i class="icon icon-star-empty"></i>
                                    </div>
                                    <div class="rating" data-rating="4">
                                        <i class="icon icon-star-empty"></i>
                                    </div>
                                    <div class="rating" data-rating="5">
                                        <i class="icon icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                            <input type="file" class="jfilestyle" data-text="Choose your file">
                            <form id="form" class="padding-small">
                                <label>Your Review *</label>
                                <textarea placeholder="Write your review here" class="u-full-width"></textarea>
                                <label>Your Name *</label>
                                <input type="text" name="name" placeholder="Write your name here" class="u-full-width">
                                <label>Your Email *</label>
                                <input type="text" name="email" placeholder="Write your email here" class="u-full-width">
                                <label>
                                    <input type="checkbox" required="">
                                    <span class="label-body">Save my name, email, and website in this browser for the next time.</span>
                                </label>
                                <button type="submit" name="submit" class="btn btn-dark btn-medium">Submit</button>
                            </form>
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
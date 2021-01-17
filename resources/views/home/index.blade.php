@extends('layout')

@section('title')

@endsection

@section('content')
    <main id="main-container" class="main-container">

        <!-- ::::::  Start Hero Section  ::::::  -->
        <div class="hero hero-slider hero--1">
            <div class="swiper-wrapper">
                <!-- Start Hero Image -->
                <div class="hero-img hero-img--1 swiper-slide"
                     style="background-image: url(assets/img/hero/hero-home-1-img-1.jpg);">
                    <div class="hero__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-10 col-12">
                                    <div class="title title--large title--thin">SMART TV 4K</div>
                                    <div class="title title--large title--regular">QLED 75 INCH Q7F</div>
                                    <div class="title title--description">Exclusive Offer <span
                                            class="title--blue">-20% Off</span> This Week
                                    </div>
                                    <a href="single-1.html"
                                       class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Image -->
                <!-- Start Hero Image -->
                <div class="hero-img hero-img--1 swiper-slide"
                     style="background-image: url(assets/img/hero/hero-home-1-img-2.jpg);">
                    <div class="hero__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-10 col-12">
                                    <div class="title title--large title--thin">MICROWAVE</div>
                                    <div class="title title--large title--regular">TOASTER OVEN 2019</div>
                                    <div class="title title--description">Exclusive Offer <span
                                            class="title--blue">-20% Off</span> This Week
                                    </div>
                                    <a href="single-1.html"
                                       class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Image -->
                <!-- Start Hero Image -->
                <div class="hero-img hero-img--1 swiper-slide"
                     style="background-image: url(assets/img/hero/hero-home-1-img-3.jpg);">
                    <div class="hero__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-10 col-12">
                                    <div class="title title--large title--thin">SAMSUNG</div>
                                    <div class="title title--large title--regular">GALAXY S9 / S9+</div>
                                    <div class="title title--description">Exclusive Offer <span
                                            class="title--blue">-20% Off</span> This Week
                                    </div>
                                    <a href="single-1.html"
                                       class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Image -->
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination hero__dots"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <!-- Add Arrows -->
                <div class="swiper-button-next hero__nav hero__nav--next"><i class="far fa-chevron-right"></i></div>
                <div class="swiper-button-prev hero__nav hero__nav--prev"><i class="far fa-chevron-left"></i></div>
            </div>
        </div> <!-- ::::::  End Hero Section  ::::::  -->

        <!-- ::::::  Start CMS Section  ::::::  -->
        <div class="cms cms--1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <!-- Start Single CMS box -->
                        <div class="cms__content">
                            <div class="cms__icon">
                                <img class="cms__icon-img" src="assets/img/icon/cms/icon1.png" alt="">
                            </div>
                            <div class="cms__text">
                                <h6 class="cms__title">Free Delivery</h6>
                                <span class="cms__des">For all oders over $99</span>
                            </div>
                        </div>
                    </div> <!-- End Single CMS box -->
                    <!-- Start Single CMS box -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="cms__content">
                            <div class="cms__icon">
                                <img class="cms__icon-img" src="assets/img/icon/cms/icon2.png" alt="">
                            </div>
                            <div class="cms__text">
                                <h6 class="cms__title">Safe Payment</h6>
                                <span class="cms__des">100% secure payment</span>
                            </div>
                        </div>
                    </div> <!-- End Single CMS box -->
                    <!-- Start Single CMS box -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="cms__content">
                            <div class="cms__icon">
                                <img class="cms__icon-img" src="assets/img/icon/cms/icon3.png" alt="">
                            </div>
                            <div class="cms__text">
                                <h6 class="cms__title">Shop With Confidence</h6>
                                <span class="cms__des">If goods have problems</span>
                            </div>
                        </div>
                    </div> <!-- End Single CMS box -->
                    <!-- Start Single CMS box -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="cms__content">
                            <div class="cms__icon">
                                <img class="cms__icon-img" src="assets/img/icon/cms/icon4.png" alt="">
                            </div>
                            <div class="cms__text">
                                <h6 class="cms__title">24/7 Help Center</h6>
                                <span class="cms__des">Dedicated 24/7 support</span>
                            </div>
                        </div>
                    </div> <!-- End Single CMS box -->
                </div>
            </div>
        </div> <!-- ::::::  End CMS Section  ::::::  -->

        <!-- ::::::  Start banner Section  ::::::  -->
        <div class="banner banner--1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-12">
                        <div class="banner__box">
                            <a href="single-1.html" class="banner__link">
                                <img src="assets/img/banner/banner-home-1-img-1.jpg" alt="" class="banner__img">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="banner__box">
                            <a href="single-1.html" class="banner__link">
                                <img src="assets/img/banner/banner-home-1-img-2.jpg" alt="" class="banner__img">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="banner__box">
                            <a href="single-1.html" class="banner__link">
                                <img src="assets/img/banner/banner-home-1-img-3.jpg" alt="" class="banner__img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End banner Section  ::::::  -->

        <!-- ::::::  Start Product-Style - Counter Section  ::::::  -->
        <div class="product product--1 swiper-outside-arrow-hover">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content section-content--border">
                            <h5 class="section-content__title ">Hot Deals Products</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-outside-arrow-fix pos-relative">
                            <div class="product-counter-slider overflow-hidden m-t-50">
                                <div class="swiper-wrapper">
                                    <!-- Start Single Counter Product -->
                                    <div
                                        class="product__box product__box--counter product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                            </a>

                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                            </div>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-regular m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Counter Product -->
                                    <!-- Start Single Counter Product -->
                                    <div
                                        class="product__box product__box--counter product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                            </a>

                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                            </div>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-regular m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Counter Product -->
                                    <!-- Start Single Counter Product -->
                                    <div
                                        class="product__box product__box--counter product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                            </a>

                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                            </div>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-regular m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Counter Product -->
                                    <!-- Start Single Counter Product -->
                                    <div
                                        class="product__box product__box--counter product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                            </a>

                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                            </div>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-regular m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Counter Product -->
                                    <!-- Start Single Counter Product -->
                                    <div
                                        class="product__box product__box--counter product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                            </a>

                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                            </div>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-regular m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Counter Product -->
                                    <!-- Start Single Counter Product -->
                                    <div
                                        class="product__box product__box--counter product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                            </a>

                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                            </div>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-regular m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Counter Product -->
                                    <!-- Start Single Counter Product -->
                                    <div
                                        class="product__box product__box--counter product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                            </a>

                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                            </div>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-regular m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Counter Product -->
                                    <!-- Start Single Counter Product -->
                                    <div
                                        class="product__box product__box--counter product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                            </a>

                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                            </div>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-regular m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Counter Product -->
                                    <!-- Start Single Counter Product -->
                                    <div
                                        class="product__box product__box--counter product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-large/product-home-1-lg-img-1.jpg" alt="">
                                            </a>

                                            <div class="product__counter-box">
                                                <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                            </div>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-regular m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Counter Product -->

                                </div>
                                <div class="swiper-buttons">
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next swiper-button-hidden default__nav default__nav--next"><i
                                            class="fal fa-chevron-right"></i></div>
                                    <div class="swiper-button-prev swiper-button-hidden default__nav default__nav--prev"><i
                                            class="fal fa-chevron-left"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End Product-Style - Counter Section  ::::::  -->

        <!-- ::::::  Start banner Section  ::::::  -->
        <div class="banner banner--1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="banner__box">
                            <a href="single-1.html" class="banner__link">
                                <img src="assets/img/banner/banner-home-1-img-4.jpg" alt="" class="banner__img">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="banner__box">
                            <a href="single-1.html" class="banner__link">
                                <img src="assets/img/banner/banner-home-1-img-5.jpg" alt="" class="banner__img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End banner Section  ::::::  -->

        <!-- ::::::  Start Product Style - Category Section  ::::::  -->
        <div class="product product--1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-3 col-12">
                        <div class="section-content">
                            <h5 class="section-content__title">Top Categories This Week</h5>
                            <p class="section-content__desc">Aliquam eget interdum consectetuer habitasse.</p>
                        </div>
                    </div>
                    <div class="col-xl-10 col-md-9 col-12">
                        <div class="product-category-slider overflow-hidden  margin-reset">
                            <div class="swiper-wrapper">
                                <!-- Start Single Category Product -->
                                <div
                                    class="product__box product__box--catagory  product__box--border swiper-slide text-center">
                                    <div class="product__img-box">
                                        <a href="shop-1.html" class="product__img--link">
                                            <img class="product__img"
                                                 src="assets/img/product/category/category-home-1-img-1.jpg" alt="">
                                        </a>
                                        <a href="shop-1.html" class="product__link product__link--weight-regular m-t-30">
                                            Gaming
                                        </a>
                                    </div>
                                </div> <!-- End Single Category Product -->
                                <!-- Start Single Category Product -->
                                <div
                                    class="product__box product__box--catagory  product__box--border swiper-slide text-center">
                                    <div class="product__img-box">
                                        <a href="shop-1.html" class="product__img--link">
                                            <img class="product__img"
                                                 src="assets/img/product/category/category-home-1-img-2.jpg" alt="">
                                        </a>
                                        <a href="shop-1.html" class="product__link product__link--weight-regular m-t-30">
                                            Kitchen
                                        </a>
                                    </div>
                                </div> <!-- End Single Category Product -->
                                <!-- Start Single Category Product -->
                                <div
                                    class="product__box product__box--catagory  product__box--border swiper-slide text-center">
                                    <div class="product__img-box">
                                        <a href="shop-1.html" class="product__img--link">
                                            <img class="product__img"
                                                 src="assets/img/product/category/category-home-1-img-3.jpg" alt="">
                                        </a>
                                        <a href="shop-1.html" class="product__link product__link--weight-regular m-t-30">
                                            Entertainment
                                        </a>
                                    </div>
                                </div> <!-- End Single Category Product -->
                                <!-- Start Single Category Product -->
                                <div
                                    class="product__box product__box--catagory  product__box--border swiper-slide text-center">
                                    <div class="product__img-box">
                                        <a href="shop-1.html" class="product__img--link">
                                            <img class="product__img"
                                                 src="assets/img/product/category/category-home-1-img-4.jpg" alt="">
                                        </a>
                                        <a href="shop-1.html" class="product__link product__link--weight-regular m-t-30">
                                            Communication
                                        </a>
                                    </div>
                                </div> <!-- End Single Category Product -->
                                <!-- Start Single Category Product -->
                                <div
                                    class="product__box product__box--catagory  product__box--border swiper-slide text-center">
                                    <div class="product__img-box">
                                        <a href="shop-1.html" class="product__img--link">
                                            <img class="product__img"
                                                 src="assets/img/product/category/category-home-1-img-5.jpg" alt="">
                                        </a>
                                        <a href="shop-1.html" class="product__link product__link--weight-regular m-t-30">
                                            Computer
                                        </a>
                                    </div>
                                </div> <!-- End Single Category Product -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End Product Style - Category Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Large Section  ::::::  -->
        <div class="product product--1 gray-bg p-tb-100 swiper-outside-arrow-hover">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="section-content section-content--border d-md-flex align-items-center justify-content-between">
                            <h5 class="section-content__title">Smartphone & Tablets</h5>
                            <ul class="tablist tablist--style-blue tablist--style-gap-20 nav">
                                <li><a class="nav-link active" data-toggle="tab" href="#fashion">Fashion</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#electronics">Electronics</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#toysandhobbies">Toys & Hobbies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="product-large-tab-box">
                            <div class="tab-content tab-animate-zoom">
                                <div class="tab-pane show active" id="fashion">
                                    <!-- Start Single Tab Content -->
                                    <div class="swiper-outside-arrow-fix pos-relative">
                                        <div class="large-product-slider overflow-hidden m-t-50">
                                            <div class="swiper-wrapper">
                                                <!-- Start Single Large Product -->
                                                <div class="single-large-product swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-8 col-lg-7">
                                                            <div
                                                                class="product__box product__box--lg-hr product__box--border-hover">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="product__img-box">
                                                                            <a href="single-1.html"
                                                                               class="product__img--link">
                                                                                <img class="product__img"
                                                                                     src="assets/img/product/size-large/product-home-1-lg-img-1.jpg"
                                                                                     alt="">
                                                                            </a>
                                                                            <span
                                                                                class="product__tag product__tag--new">New</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="product__price">
                                                                            <span class="product__price-del">$35.90</span>
                                                                            <span class="product__price-reg">$31.69</span>
                                                                        </div>
                                                                        <a href="single-1.html"
                                                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                            SonicFuel Wireless Over-Ear Headphones
                                                                        </a>
                                                                        <ul class="product__review m-t-10">
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--blank"><i
                                                                                    class="icon-star"></i></li>
                                                                        </ul>
                                                                        <div class="product__desc m-t-25 m-b-30">
                                                                            <p>The ATH-S700BT offers clear, full-bodied
                                                                                audio reproduction with Bluetooth® wireless
                                                                                operation. The headphones are equipped with
                                                                                a mic, and music and volume controls,
                                                                                allowing you to ...</p>
                                                                        </div>

                                                                        <a href="#modalAddCart" data-toggle="modal"
                                                                           class="btn btn--box btn--medium btn--gray btn--uppercase btn--weight">Add
                                                                            to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-5">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-10.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-reg">$29.00</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    PlayStation 4 Pro 1TB Star Wars
                                                                                    Battlefront II
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover m-t-35">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-7.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-del">$9.00</span>
                                                                                    <span
                                                                                        class="product__price-reg">$7.92</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    P-Series 4K UHD Dolby Vision HDR Roku
                                                                                    Smart TV
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Single Large Product -->
                                                <!-- Start Single Large Product -->
                                                <div class="single-large-product swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-8 col-lg-7">
                                                            <div
                                                                class="product__box product__box--lg-hr product__box--border-hover">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="product__img-box">
                                                                            <a href="single-1.html"
                                                                               class="product__img--link">
                                                                                <img class="product__img"
                                                                                     src="assets/img/product/size-large/product-home-1-lg-img-2.jpg"
                                                                                     alt="">
                                                                            </a>
                                                                            <span
                                                                                class="product__tag product__tag--new">New</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="product__price">
                                                                            <span class="product__price-del">$35.90</span>
                                                                            <span class="product__price-reg">$31.69</span>
                                                                        </div>
                                                                        <a href="single-1.html"
                                                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                            SonicFuel Wireless Over-Ear Headphones
                                                                        </a>
                                                                        <ul class="product__review m-t-10">
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--blank"><i
                                                                                    class="icon-star"></i></li>
                                                                        </ul>
                                                                        <div class="product__desc m-t-25 m-b-30">
                                                                            <p>The ATH-S700BT offers clear, full-bodied
                                                                                audio reproduction with Bluetooth® wireless
                                                                                operation. The headphones are equipped with
                                                                                a mic, and music and volume controls,
                                                                                allowing you to ...</p>
                                                                        </div>

                                                                        <a href="#modalAddCart" data-toggle="modal"
                                                                           class="btn btn--box btn--medium btn--gray btn--uppercase btn--weight">Add
                                                                            to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-5">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-1.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-reg">$29.00</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    PlayStation 4 Pro 1TB Star Wars
                                                                                    Battlefront II
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover m-t-35">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-2.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-del">$9.00</span>
                                                                                    <span
                                                                                        class="product__price-reg">$7.92</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    P-Series 4K UHD Dolby Vision HDR Roku
                                                                                    Smart TV
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Single Large Product -->
                                                <!-- Start Single Large Product -->
                                                <div class="single-large-product swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-8 col-lg-7">
                                                            <div
                                                                class="product__box product__box--lg-hr product__box--border-hover">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="product__img-box">
                                                                            <a href="single-1.html"
                                                                               class="product__img--link">
                                                                                <img class="product__img"
                                                                                     src="assets/img/product/size-large/product-home-1-lg-img-3.jpg"
                                                                                     alt="">
                                                                            </a>
                                                                            <span
                                                                                class="product__tag product__tag--new">New</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="product__price">
                                                                            <span class="product__price-del">$35.90</span>
                                                                            <span class="product__price-reg">$31.69</span>
                                                                        </div>
                                                                        <a href="single-1.html"
                                                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                            SonicFuel Wireless Over-Ear Headphones
                                                                        </a>
                                                                        <ul class="product__review m-t-10">
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--blank"><i
                                                                                    class="icon-star"></i></li>
                                                                        </ul>
                                                                        <div class="product__desc m-t-25 m-b-30">
                                                                            <p>The ATH-S700BT offers clear, full-bodied
                                                                                audio reproduction with Bluetooth® wireless
                                                                                operation. The headphones are equipped with
                                                                                a mic, and music and volume controls,
                                                                                allowing you to ...</p>
                                                                        </div>

                                                                        <a href="#modalAddCart" data-toggle="modal"
                                                                           class="btn btn--box btn--medium btn--gray btn--uppercase btn--weight">Add
                                                                            to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-5">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-2.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-reg">$29.00</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    PlayStation 4 Pro 1TB Star Wars
                                                                                    Battlefront II
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover m-t-35">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-3.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-del">$9.00</span>
                                                                                    <span
                                                                                        class="product__price-reg">$7.92</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    P-Series 4K UHD Dolby Vision HDR Roku
                                                                                    Smart TV
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Single Large Product -->
                                            </div>
                                            <div class="swiper-buttons">
                                                <!-- Add Arrows -->
                                                <div class="swiper-button-next default__nav default__nav--next"><i
                                                        class="fal fa-chevron-right"></i></div>
                                                <div class="swiper-button-prev default__nav default__nav--prev"><i
                                                        class="fal fa-chevron-left"></i></div>
                                            </div>
                                        </div>
                                    </div> <!-- End Single Tab Content -->
                                </div>
                                <div class="tab-pane " id="electronics">
                                    <!-- Start Single Tab Content -->
                                    <div class="swiper-outside-arrow-fix pos-relative">
                                        <div class="large-product-slider overflow-hidden m-t-50">
                                            <div class="swiper-wrapper">
                                                <!-- Start Single Large Product -->
                                                <div class="single-large-product swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-8 col-lg-7">
                                                            <div
                                                                class="product__box product__box--lg-hr product__box--border-hover">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="product__img-box">
                                                                            <a href="single-1.html"
                                                                               class="product__img--link">
                                                                                <img class="product__img"
                                                                                     src="assets/img/product/size-large/product-home-1-lg-img-3.jpg"
                                                                                     alt="">
                                                                            </a>
                                                                            <span
                                                                                class="product__tag product__tag--new">New</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="product__price">
                                                                            <span class="product__price-del">$35.90</span>
                                                                            <span class="product__price-reg">$31.69</span>
                                                                        </div>
                                                                        <a href="single-1.html"
                                                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                            SonicFuel Wireless Over-Ear Headphones
                                                                        </a>
                                                                        <ul class="product__review m-t-10">
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--blank"><i
                                                                                    class="icon-star"></i></li>
                                                                        </ul>
                                                                        <div class="product__desc m-t-25 m-b-30">
                                                                            <p>The ATH-S700BT offers clear, full-bodied
                                                                                audio reproduction with Bluetooth® wireless
                                                                                operation. The headphones are equipped with
                                                                                a mic, and music and volume controls,
                                                                                allowing you to ...</p>
                                                                        </div>

                                                                        <a href="#modalAddCart" data-toggle="modal"
                                                                           class="btn btn--box btn--medium btn--gray btn--uppercase btn--weight">Add
                                                                            to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-5">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-9.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-reg">$29.00</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    PlayStation 4 Pro 1TB Star Wars
                                                                                    Battlefront II
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover m-t-35">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-8.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-del">$9.00</span>
                                                                                    <span
                                                                                        class="product__price-reg">$7.92</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    P-Series 4K UHD Dolby Vision HDR Roku
                                                                                    Smart TV
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Single Large Product -->
                                                <!-- Start Single Large Product -->
                                                <div class="single-large-product swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-8 col-lg-7">
                                                            <div
                                                                class="product__box product__box--lg-hr product__box--border-hover">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="product__img-box">
                                                                            <a href="single-1.html"
                                                                               class="product__img--link">
                                                                                <img class="product__img"
                                                                                     src="assets/img/product/size-large/product-home-1-lg-img-2.jpg"
                                                                                     alt="">
                                                                            </a>
                                                                            <span
                                                                                class="product__tag product__tag--new">New</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="product__price">
                                                                            <span class="product__price-del">$35.90</span>
                                                                            <span class="product__price-reg">$31.69</span>
                                                                        </div>
                                                                        <a href="single-1.html"
                                                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                            SonicFuel Wireless Over-Ear Headphones
                                                                        </a>
                                                                        <ul class="product__review m-t-10">
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--blank"><i
                                                                                    class="icon-star"></i></li>
                                                                        </ul>
                                                                        <div class="product__desc m-t-25 m-b-30">
                                                                            <p>The ATH-S700BT offers clear, full-bodied
                                                                                audio reproduction with Bluetooth® wireless
                                                                                operation. The headphones are equipped with
                                                                                a mic, and music and volume controls,
                                                                                allowing you to ...</p>
                                                                        </div>

                                                                        <a href="#modalAddCart" data-toggle="modal"
                                                                           class="btn btn--box btn--medium btn--gray btn--uppercase btn--weight">Add
                                                                            to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-5">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-5.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-reg">$29.00</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    PlayStation 4 Pro 1TB Star Wars
                                                                                    Battlefront II
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover m-t-35">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-7.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-del">$9.00</span>
                                                                                    <span
                                                                                        class="product__price-reg">$7.92</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    P-Series 4K UHD Dolby Vision HDR Roku
                                                                                    Smart TV
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Single Large Product -->
                                                <!-- Start Single Large Product -->
                                                <div class="single-large-product swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-8 col-lg-7">
                                                            <div
                                                                class="product__box product__box--lg-hr product__box--border-hover">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="product__img-box">
                                                                            <a href="single-1.html"
                                                                               class="product__img--link">
                                                                                <img class="product__img"
                                                                                     src="assets/img/product/size-large/product-home-1-lg-img-4.jpg"
                                                                                     alt="">
                                                                            </a>
                                                                            <span
                                                                                class="product__tag product__tag--new">New</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="product__price">
                                                                            <span class="product__price-del">$35.90</span>
                                                                            <span class="product__price-reg">$31.69</span>
                                                                        </div>
                                                                        <a href="single-1.html"
                                                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                            SonicFuel Wireless Over-Ear Headphones
                                                                        </a>
                                                                        <ul class="product__review m-t-10">
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--blank"><i
                                                                                    class="icon-star"></i></li>
                                                                        </ul>
                                                                        <div class="product__desc m-t-25 m-b-30">
                                                                            <p>The ATH-S700BT offers clear, full-bodied
                                                                                audio reproduction with Bluetooth® wireless
                                                                                operation. The headphones are equipped with
                                                                                a mic, and music and volume controls,
                                                                                allowing you to ...</p>
                                                                        </div>

                                                                        <a href="#modalAddCart" data-toggle="modal"
                                                                           class="btn btn--box btn--medium btn--gray btn--uppercase btn--weight">Add
                                                                            to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-5">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-1.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-reg">$29.00</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    PlayStation 4 Pro 1TB Star Wars
                                                                                    Battlefront II
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover m-t-35">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-2.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-del">$9.00</span>
                                                                                    <span
                                                                                        class="product__price-reg">$7.92</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    P-Series 4K UHD Dolby Vision HDR Roku
                                                                                    Smart TV
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Single Large Product -->
                                            </div>
                                            <div class="swiper-buttons">
                                                <!-- Add Arrows -->
                                                <div class="swiper-button-next default__nav default__nav--next"><i
                                                        class="fal fa-chevron-right"></i></div>
                                                <div class="swiper-button-prev default__nav default__nav--prev"><i
                                                        class="fal fa-chevron-left"></i></div>
                                            </div>
                                        </div>
                                    </div> <!-- End Single Tab Content -->
                                </div>
                                <div class="tab-pane " id="toysandhobbies">
                                    <!-- Start Single Tab Content -->
                                    <div class="swiper-outside-arrow-fix pos-relative">
                                        <div class="large-product-slider overflow-hidden m-t-50">
                                            <div class="swiper-wrapper">
                                                <!-- Start Single Large Product -->
                                                <div class="single-large-product swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-8 col-lg-7">
                                                            <div
                                                                class="product__box product__box--lg-hr product__box--border-hover">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="product__img-box">
                                                                            <a href="single-1.html"
                                                                               class="product__img--link">
                                                                                <img class="product__img"
                                                                                     src="assets/img/product/size-large/product-home-1-lg-img-3.jpg"
                                                                                     alt="">
                                                                            </a>
                                                                            <span
                                                                                class="product__tag product__tag--new">New</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="product__price">
                                                                            <span class="product__price-del">$35.90</span>
                                                                            <span class="product__price-reg">$31.69</span>
                                                                        </div>
                                                                        <a href="single-1.html"
                                                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                            SonicFuel Wireless Over-Ear Headphones
                                                                        </a>
                                                                        <ul class="product__review m-t-10">
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--blank"><i
                                                                                    class="icon-star"></i></li>
                                                                        </ul>
                                                                        <div class="product__desc m-t-25 m-b-30">
                                                                            <p>The ATH-S700BT offers clear, full-bodied
                                                                                audio reproduction with Bluetooth® wireless
                                                                                operation. The headphones are equipped with
                                                                                a mic, and music and volume controls,
                                                                                allowing you to ...</p>
                                                                        </div>

                                                                        <a href="#modalAddCart" data-toggle="modal"
                                                                           class="btn btn--box btn--medium btn--gray btn--uppercase btn--weight">Add
                                                                            to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-5">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-3.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-reg">$29.00</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    PlayStation 4 Pro 1TB Star Wars
                                                                                    Battlefront II
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover m-t-35">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-6.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-del">$9.00</span>
                                                                                    <span
                                                                                        class="product__price-reg">$7.92</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    P-Series 4K UHD Dolby Vision HDR Roku
                                                                                    Smart TV
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Single Large Product -->
                                                <!-- Start Single Large Product -->
                                                <div class="single-large-product swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-8 col-lg-7">
                                                            <div
                                                                class="product__box product__box--lg-hr product__box--border-hover">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="product__img-box">
                                                                            <a href="single-1.html"
                                                                               class="product__img--link">
                                                                                <img class="product__img"
                                                                                     src="assets/img/product/size-large/product-home-1-lg-img-1.jpg"
                                                                                     alt="">
                                                                            </a>
                                                                            <span
                                                                                class="product__tag product__tag--new">New</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="product__price">
                                                                            <span class="product__price-del">$35.90</span>
                                                                            <span class="product__price-reg">$31.69</span>
                                                                        </div>
                                                                        <a href="single-1.html"
                                                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                            SonicFuel Wireless Over-Ear Headphones
                                                                        </a>
                                                                        <ul class="product__review m-t-10">
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--blank"><i
                                                                                    class="icon-star"></i></li>
                                                                        </ul>
                                                                        <div class="product__desc m-t-25 m-b-30">
                                                                            <p>The ATH-S700BT offers clear, full-bodied
                                                                                audio reproduction with Bluetooth® wireless
                                                                                operation. The headphones are equipped with
                                                                                a mic, and music and volume controls,
                                                                                allowing you to ...</p>
                                                                        </div>

                                                                        <a href="#modalAddCart" data-toggle="modal"
                                                                           class="btn btn--box btn--medium btn--gray btn--uppercase btn--weight">Add
                                                                            to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-5">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-2.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-reg">$29.00</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    PlayStation 4 Pro 1TB Star Wars
                                                                                    Battlefront II
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover m-t-35">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-5.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-del">$9.00</span>
                                                                                    <span
                                                                                        class="product__price-reg">$7.92</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    P-Series 4K UHD Dolby Vision HDR Roku
                                                                                    Smart TV
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Single Large Product -->
                                                <!-- Start Single Large Product -->
                                                <div class="single-large-product swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-8 col-lg-7">
                                                            <div
                                                                class="product__box product__box--lg-hr product__box--border-hover">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="product__img-box">
                                                                            <a href="single-1.html"
                                                                               class="product__img--link">
                                                                                <img class="product__img"
                                                                                     src="assets/img/product/size-large/product-home-1-lg-img-3.jpg"
                                                                                     alt="">
                                                                            </a>
                                                                            <span
                                                                                class="product__tag product__tag--new">New</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="product__price">
                                                                            <span class="product__price-del">$35.90</span>
                                                                            <span class="product__price-reg">$31.69</span>
                                                                        </div>
                                                                        <a href="single-1.html"
                                                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                            SonicFuel Wireless Over-Ear Headphones
                                                                        </a>
                                                                        <ul class="product__review m-t-10">
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--fill"><i
                                                                                    class="icon-star"></i></li>
                                                                            <li class="product__review--blank"><i
                                                                                    class="icon-star"></i></li>
                                                                        </ul>
                                                                        <div class="product__desc m-t-25 m-b-30">
                                                                            <p>The ATH-S700BT offers clear, full-bodied
                                                                                audio reproduction with Bluetooth® wireless
                                                                                operation. The headphones are equipped with
                                                                                a mic, and music and volume controls,
                                                                                allowing you to ...</p>
                                                                        </div>

                                                                        <a href="#modalAddCart" data-toggle="modal"
                                                                           class="btn btn--box btn--medium btn--gray btn--uppercase btn--weight">Add
                                                                            to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-5">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-6.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-reg">$29.00</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    PlayStation 4 Pro 1TB Star Wars
                                                                                    Battlefront II
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div
                                                                        class="product__box product__box--md product__box--border-hover m-t-35">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    <a href="single-1.html"
                                                                                       class="product__img--link">
                                                                                        <img class="product__img"
                                                                                             src="assets/img/product/size-normal/product-home-1-img-9.jpg"
                                                                                             alt="">
                                                                                    </a>
                                                                                    <span
                                                                                        class="product__tag product__tag--new">New</span>
                                                                                    <a href="wishlist.html"
                                                                                       class="product__wishlist-icon"><i
                                                                                            class="icon-heart"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                <span
                                                                                    class="product__price-del">$9.00</span>
                                                                                    <span
                                                                                        class="product__price-reg">$7.92</span>
                                                                                </div>
                                                                                <a href="single-1.html"
                                                                                   class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    P-Series 4K UHD Dolby Vision HDR Roku
                                                                                    Smart TV
                                                                                </a>
                                                                                <a href="#modalAddCart" data-toggle="modal"
                                                                                   class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add
                                                                                    to cart</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Single Large Product -->
                                            </div>
                                            <div class="swiper-buttons">
                                                <!-- Add Arrows -->
                                                <div class="swiper-button-next default__nav default__nav--next"><i
                                                        class="fal fa-chevron-right"></i></div>
                                                <div class="swiper-button-prev default__nav default__nav--prev"><i
                                                        class="fal fa-chevron-left"></i></div>
                                            </div>
                                        </div>
                                    </div> <!-- End Single Tab Content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End Product Style - Large Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product product--1 swiper-outside-arrow-hover">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="section-content section-content--border d-flex align-items-center justify-content-between">
                            <h5 class="section-content__title">Electronics Show </h5>
                            <a href="single-1.html">Show All Products <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-outside-arrow-fix pos-relative">
                            <div class="product-default-slider-5grid overflow-hidden  m-t-50">
                                <div class="swiper-wrapper">
                                    <!-- Start Single Default Product -->
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                            </a>

                                            <a href="#modalAddCart" data-toggle="modal"
                                               class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                to cart</a>
                                            <span class="product__tag product__tag--discount">-12%</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Default Product -->
                                    <!-- Start Single Default Product -->
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                            </a>

                                            <a href="#modalAddCart" data-toggle="modal"
                                               class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                to cart</a>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Default Product -->
                                    <!-- Start Single Default Product -->
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                            </a>

                                            <a href="#modalAddCart" data-toggle="modal"
                                               class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                to cart</a>
                                            <span class="product__tag product__tag--discount">-12%</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Default Product -->
                                    <!-- Start Single Default Product -->
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                            </a>

                                            <a href="#modalAddCart" data-toggle="modal"
                                               class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                to cart</a>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Default Product -->
                                    <!-- Start Single Default Product -->
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                            </a>

                                            <a href="#modalAddCart" data-toggle="modal"
                                               class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                to cart</a>
                                            <span class="product__tag product__tag--discount">-12%</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Default Product -->
                                    <!-- Start Single Default Product -->
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                            </a>

                                            <a href="#modalAddCart" data-toggle="modal"
                                               class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                to cart</a>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Default Product -->
                                    <!-- Start Single Default Product -->
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                            </a>

                                            <a href="#modalAddCart" data-toggle="modal"
                                               class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                to cart</a>
                                            <span class="product__tag product__tag--discount">-12%</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Default Product -->
                                    <!-- Start Single Default Product -->
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                            </a>

                                            <a href="#modalAddCart" data-toggle="modal"
                                               class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                to cart</a>
                                            <span class="product__tag product__tag--new">New</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Default Product -->
                                    <!-- Start Single Default Product -->
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img"
                                                     src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                            </a>

                                            <a href="#modalAddCart" data-toggle="modal"
                                               class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                to cart</a>
                                            <span class="product__tag product__tag--discount">-12%</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                           class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> <!-- End Single Default Product -->
                                </div>
                                <div class="swiper-buttons">
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next default__nav default__nav--next"><i
                                            class="fal fa-chevron-right"></i></div>
                                    <div class="swiper-button-prev default__nav default__nav--prev"><i
                                            class="fal fa-chevron-left"></i></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

        <!-- ::::::  Start banner Section  ::::::  -->
        <div class="banner banner--1">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-12">
                        <div class="banner__box">
                            <a href="single-1.html" class="banner__link">
                                <img src="assets/img/banner/banner-home-1-img-6.jpg" alt="" class="banner__img">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="banner__box">
                            <a href="single-1.html" class="banner__link">
                                <img src="assets/img/banner/banner-home-1-img-7.jpg" alt="" class="banner__img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End banner Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product product--1 swiper-outside-arrow-hover">
            <div class="container">
                <div class="row">
                    <!-- Start Product area -->
                    <div class="col-lg-9 col-md-8">
                        <div class="row">
                            <div class="col-12">
                                <div
                                    class="section-content section-content--border d-flex  align-items-center justify-content-between">
                                    <h5 class="section-content__title">Featured Products </h5>
                                    <a href="single-1.html">Show All Products <i class="icon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="swiper-outside-arrow-fix pos-relative">
                                    <div class="product-default-slider-4grid overflow-hidden  m-t-50">
                                        <div class="swiper-wrapper">
                                            <!-- Start Single Default Product -->
                                            <div
                                                class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.html" class="product__img--link">
                                                        <img class="product__img"
                                                             src="assets/img/product/size-normal/product-home-1-img-1.jpg"
                                                             alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal"
                                                       class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                        to cart</a>
                                                    <span class="product__tag product__tag--discount">-12%</span>
                                                    <a href="wishlist.html" class="product__wishlist-icon"><i
                                                            class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-del">$11.90</span>
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.html"
                                                   class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div
                                                class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.html" class="product__img--link">
                                                        <img class="product__img"
                                                             src="assets/img/product/size-normal/product-home-1-img-2.jpg"
                                                             alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal"
                                                       class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                        to cart</a>
                                                    <span class="product__tag product__tag--new">New</span>
                                                    <a href="wishlist.html" class="product__wishlist-icon"><i
                                                            class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.html"
                                                   class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div
                                                class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.html" class="product__img--link">
                                                        <img class="product__img"
                                                             src="assets/img/product/size-normal/product-home-1-img-3.jpg"
                                                             alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal"
                                                       class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                        to cart</a>
                                                    <span class="product__tag product__tag--discount">-12%</span>
                                                    <a href="wishlist.html" class="product__wishlist-icon"><i
                                                            class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-del">$11.90</span>
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.html"
                                                   class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div
                                                class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.html" class="product__img--link">
                                                        <img class="product__img"
                                                             src="assets/img/product/size-normal/product-home-1-img-4.jpg"
                                                             alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal"
                                                       class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                        to cart</a>
                                                    <span class="product__tag product__tag--new">New</span>
                                                    <a href="wishlist.html" class="product__wishlist-icon"><i
                                                            class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.html"
                                                   class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div
                                                class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.html" class="product__img--link">
                                                        <img class="product__img"
                                                             src="assets/img/product/size-normal/product-home-1-img-5.jpg"
                                                             alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal"
                                                       class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                        to cart</a>
                                                    <span class="product__tag product__tag--discount">-12%</span>
                                                    <a href="wishlist.html" class="product__wishlist-icon"><i
                                                            class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-del">$11.90</span>
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.html"
                                                   class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div
                                                class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.html" class="product__img--link">
                                                        <img class="product__img"
                                                             src="assets/img/product/size-normal/product-home-1-img-6.jpg"
                                                             alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal"
                                                       class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                        to cart</a>
                                                    <span class="product__tag product__tag--new">New</span>
                                                    <a href="wishlist.html" class="product__wishlist-icon"><i
                                                            class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.html"
                                                   class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div
                                                class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.html" class="product__img--link">
                                                        <img class="product__img"
                                                             src="assets/img/product/size-normal/product-home-1-img-7.jpg"
                                                             alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal"
                                                       class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                        to cart</a>
                                                    <span class="product__tag product__tag--discount">-12%</span>
                                                    <a href="wishlist.html" class="product__wishlist-icon"><i
                                                            class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-del">$11.90</span>
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.html"
                                                   class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div
                                                class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.html" class="product__img--link">
                                                        <img class="product__img"
                                                             src="assets/img/product/size-normal/product-home-1-img-8.jpg"
                                                             alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal"
                                                       class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                        to cart</a>
                                                    <span class="product__tag product__tag--new">New</span>
                                                    <a href="wishlist.html" class="product__wishlist-icon"><i
                                                            class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.html"
                                                   class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div
                                                class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.html" class="product__img--link">
                                                        <img class="product__img"
                                                             src="assets/img/product/size-normal/product-home-1-img-9.jpg"
                                                             alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal"
                                                       class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add
                                                        to cart</a>
                                                    <span class="product__tag product__tag--discount">-12%</span>
                                                    <a href="wishlist.html" class="product__wishlist-icon"><i
                                                            class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-del">$11.90</span>
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.html"
                                                   class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                        </div>
                                        <div class="swiper-buttons">
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next default__nav default__nav--next"><i
                                                    class="fal fa-chevron-right"></i></div>
                                            <div class="swiper-button-prev default__nav default__nav--prev"><i
                                                    class="fal fa-chevron-left"></i></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> <!-- Start Product area -->

                    <!-- Start Testimonial area -->
                    <div class="col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-12">
                                <div
                                    class="section-content section-content--border d-flex align-items-center justify-content-between">
                                    <h5 class="section-content__title">Testimonials</h5>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="swiper-outside-arrow-fix pos-relative">
                                    <div class="testimonial testimonial--small overflow-hidden  m-t-50">
                                        <div class="swiper-wrapper">
                                            <!-- Start Single Testimonial area -->
                                            <div class="testimonial__item swiper-slide text-center">
                                                <div class="testimonial__img-box m-b-20">
                                                    <img src="assets/img/testimonial/testimonial-home-1-img-1.png" alt=""
                                                         class="testimonial__img">
                                                </div>
                                                <div class="testimonial__desc">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                                        molestie consequat, vel ... </p>
                                                </div>
                                                <div class="testimonial__info">
                                                    <span class="testimonial__info--user">John Doe </span>
                                                    <span class="testimonial__info--email">demo@posthemes.com</span>
                                                </div>
                                            </div> <!-- End Single Testimonial area -->
                                            <!-- Start Single Testimonial area -->
                                            <div class="testimonial__item swiper-slide text-center">
                                                <div class="testimonial__img-box m-b-20">
                                                    <img src="assets/img/testimonial/testimonial-home-1-img-2.png" alt=""
                                                         class="testimonial__img">
                                                </div>
                                                <div class="testimonial__desc">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                                        molestie consequat, vel ... </p>
                                                </div>
                                                <div class="testimonial__info">
                                                    <span class="testimonial__info--user">John Doe </span>
                                                    <span class="testimonial__info--email">demo@posthemes.com</span>
                                                </div>
                                            </div> <!-- End Single Testimonial area -->
                                            <!-- Start Single Testimonial area -->
                                            <div class="testimonial__item swiper-slide text-center">
                                                <div class="testimonial__img-box m-b-20">
                                                    <img src="assets/img/testimonial/testimonial-home-1-img-3.png" alt=""
                                                         class="testimonial__img">
                                                </div>
                                                <div class="testimonial__desc">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                                        molestie consequat, vel ... </p>
                                                </div>
                                                <div class="testimonial__info">
                                                    <span class="testimonial__info--user">John Doe </span>
                                                    <span class="testimonial__info--email">demo@posthemes.com</span>
                                                </div>
                                            </div> <!-- End Single Testimonial area -->
                                            <!-- Start Single Testimonial area -->
                                            <div class="testimonial__item swiper-slide text-center">
                                                <div class="testimonial__img-box m-b-20">
                                                    <img src="assets/img/testimonial/testimonial-home-1-img-1.png" alt=""
                                                         class="testimonial__img">
                                                </div>
                                                <div class="testimonial__desc">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                                        molestie consequat, vel ... </p>
                                                </div>
                                                <div class="testimonial__info">
                                                    <span class="testimonial__info--user">John Doe </span>
                                                    <span class="testimonial__info--email">demo@posthemes.com</span>
                                                </div>
                                            </div> <!-- End Single Testimonial area -->
                                        </div>
                                        <!-- Add Pagination -->
                                        <div class="swiper-pagination testimonial__dots"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Testimonial area -->
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

        <!-- ::::::  Start  Blog News  ::::::  -->
        <div class="blog blog--1 gray-bg p-tb-100 swiper-outside-arrow-hover">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="section-content section-content--border d-flex align-items-center justify-content-between">
                            <h5 class="section-content__title">Latest Blog</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-outside-arrow-fix pos-relative">
                            <div class="blog-news blog-news-3grid overflow-hidden  m-t-50">
                                <div class="swiper-wrapper">
                                    <!-- Single Blog News Item -->
                                    <div class="blog-news__box swiper-slide text-center">
                                        <div class="blog-news__img-box">
                                            <a href="blog-single-left-sidebar.html" class="blog-news__img--link">
                                                <img src="assets/img/blog/news/blog-news-home-1-img-1.jpg" alt=""
                                                     class="blog-news__img">
                                            </a>
                                        </div>

                                        <div class="blog-news__archive m-t-25">
                                            <a href="#" class="blog-news__postdate"><i class="far fa-calendar"></i> Oct 29,
                                                2018</a>
                                            <a href="#" class="blog-news__author"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>

                                        <a href="blog-single-left-sidebar.html" class="blog-news__link">
                                            <h5>Vehicula Diam Potenti Imperdiet Placerat Placeat</h5>
                                        </a>
                                    </div> <!-- End Blog News Item -->
                                    <!-- Single Blog News Item -->
                                    <div class="blog-news__box swiper-slide text-center">
                                        <div class="blog-news__img-box">
                                            <a href="blog-single-left-sidebar.html" class="blog-news__img--link">
                                                <img src="assets/img/blog/news/blog-news-home-1-img-2.jpg" alt=""
                                                     class="blog-news__img">
                                            </a>
                                        </div>

                                        <div class="blog-news__archive m-t-25">
                                            <a href="#" class="blog-news__postdate"><i class="far fa-calendar"></i> Oct 29,
                                                2018</a>
                                            <a href="#" class="blog-news__author"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>

                                        <a href="blog-single-left-sidebar.html" class="blog-news__link">
                                            <h5>Vehicula Diam Potenti Imperdiet Placerat Placeat</h5>
                                        </a>
                                    </div> <!-- End Blog News Item -->
                                    <!-- Single Blog News Item -->
                                    <div class="blog-news__box swiper-slide text-center">
                                        <div class="blog-news__img-box">
                                            <a href="blog-single-left-sidebar.html" class="blog-news__img--link">
                                                <img src="assets/img/blog/news/blog-news-home-1-img-3.jpg" alt=""
                                                     class="blog-news__img">
                                            </a>
                                        </div>

                                        <div class="blog-news__archive m-t-25">
                                            <a href="#" class="blog-news__postdate"><i class="far fa-calendar"></i> Oct 29,
                                                2018</a>
                                            <a href="#" class="blog-news__author"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>

                                        <a href="blog-single-left-sidebar.html" class="blog-news__link">
                                            <h5>Vehicula Diam Potenti Imperdiet Placerat Placeat</h5>
                                        </a>
                                    </div> <!-- End Blog News Item -->
                                    <!-- Single Blog News Item -->
                                    <div class="blog-news__box swiper-slide text-center">
                                        <div class="blog-news__img-box">
                                            <a href="blog-single-left-sidebar.html" class="blog-news__img--link">
                                                <img src="assets/img/blog/news/blog-news-home-1-img-4.jpg" alt=""
                                                     class="blog-news__img">
                                            </a>
                                        </div>

                                        <div class="blog-news__archive m-t-25">
                                            <a href="#" class="blog-news__postdate"><i class="far fa-calendar"></i> Oct 29,
                                                2018</a>
                                            <a href="#" class="blog-news__author"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>

                                        <a href="blog-single-left-sidebar.html" class="blog-news__link">
                                            <h5>Vehicula Diam Potenti Imperdiet Placerat Placeat</h5>
                                        </a>
                                    </div> <!-- End Blog News Item -->
                                </div>
                                <div class="swiper-buttons">
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next default__nav default__nav--next"><i
                                            class="fal fa-chevron-right"></i></div>
                                    <div class="swiper-button-prev default__nav default__nav--prev"><i
                                            class="fal fa-chevron-left"></i></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Blog News   ::::::  -->

        <!-- ::::::  Start  Company Logo Section  ::::::  -->
        <div class="company-logo company-logo--1 swiper-outside-arrow-hover p-tb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-outside-arrow-fix pos-relative">
                            <div class="company-logo__area overflow-hidden ">
                                <div class="swiper-wrapper">
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide">
                                        <a href="#" class="company-logo__link">
                                            <img src="assets/img/company-logo/company-logo-1.jpg" alt=""
                                                 class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide">
                                        <a href="#" class="company-logo__link">
                                            <img src="assets/img/company-logo/company-logo-2.jpg" alt=""
                                                 class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide">
                                        <a href="#" class="company-logo__link">
                                            <img src="assets/img/company-logo/company-logo-3.jpg" alt=""
                                                 class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide">
                                        <a href="#" class="company-logo__link">
                                            <img src="assets/img/company-logo/company-logo-4.jpg" alt=""
                                                 class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide">
                                        <a href="#" class="company-logo__link">
                                            <img src="assets/img/company-logo/company-logo-5.jpg" alt=""
                                                 class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide">
                                        <a href="#" class="company-logo__link">
                                            <img src="assets/img/company-logo/company-logo-6.jpg" alt=""
                                                 class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide">
                                        <a href="#" class="company-logo__link">
                                            <img src="assets/img/company-logo/company-logo-7.jpg" alt=""
                                                 class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide">
                                        <a href="#" class="company-logo__link">
                                            <img src="assets/img/company-logo/company-logo-8.jpg" alt=""
                                                 class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide">
                                        <a href="#" class="company-logo__link">
                                            <img src="assets/img/company-logo/company-logo-9.jpg" alt=""
                                                 class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide">
                                        <a href="#" class="company-logo__link">
                                            <img src="assets/img/company-logo/company-logo-10.jpg" alt=""
                                                 class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide">
                                        <a href="#" class="company-logo__link">
                                            <img src="assets/img/company-logo/company-logo-1.jpg" alt=""
                                                 class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide">
                                        <a href="#" class="company-logo__link">
                                            <img src="assets/img/company-logo/company-logo-2.jpg" alt=""
                                                 class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->

                                </div>

                                <div class="swiper-buttons">
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next default__nav default__nav--next"><i
                                            class="fal fa-chevron-right"></i></div>
                                    <div class="swiper-button-prev default__nav default__nav--prev"><i
                                            class="fal fa-chevron-left"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Company Logo Section  ::::::  -->
    </main>
@endsection

@section('js')

@endsection

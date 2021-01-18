<div>
    <!-- ::::::  Start Hero Section  ::::::  -->
    <div class="hero hero-slider hero--1">
        <div class="swiper-wrapper">
            @foreach($banners as $banner)
                <div class="hero-img hero-img--1 swiper-slide"
                     style="background-image: url({{asset('uploads/images/banners/'. $banner->img)}});">
                    <div class="hero__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-10 col-12">
                                    <div class="title title--large title--thin">{{$banner->title}}</div>
                                    <div class="title title--large title--regular">{{$banner->seccond_title}}</div>
                                    <div class="title title--description">
                                        {{strip_tags($banner->description)}}
                                    </div>
                                    <a href="{{$banner->url}}" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">
                                        Shopping Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination hero__dots"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <!-- Add Arrows -->
            <div class="swiper-button-next hero__nav hero__nav--next"><i class="far fa-chevron-right"></i></div>
            <div class="swiper-button-prev hero__nav hero__nav--prev"><i class="far fa-chevron-left"></i></div>
        </div>
    </div>
    <!-- ::::::  End Hero Section  ::::::  -->
</div>

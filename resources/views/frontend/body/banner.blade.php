<?php
use Illuminate\Support\Facades\Auth;

?>
<style>
    @media (max-width:580px) {
        .main_slider_wrapper{height: 50% !important;}
        .search_container_block{height: 60% !important;}
    }
</style>


<div class="search_container_block overlay_dark_part" style="z-index:0;">


   

    <div class="main_slider_wrapper slider-area">
        <div class="slider_side_width"></div>
        <div class="slider_headphone">
            <img src="{{ asset('assets/images/headphone.webp') }}" class="img-responsive" alt="img">
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-captions caption-3">
                        <div class="container jn_container">
                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h1 data-animation="animated fadeInUp">Station Select ,
                                        </h1>
                                        .
                                        <h2 data-animation="animated fadeInUp"> Your Radio
                                        </h2>
                                        <p data-animation="animated fadeInUp"> <span>🌍 "Worldwide Audiences"🌍 </span>
                                            <br>
                                            <span>🎵 "Online Radio Directory"🎵</span> <br>
                                            <span> Submit Free Today</span>
                                        </p>
                                        <div class="slider_btn ms_cover">
                                            <div class="lang_apply_btn">
                                                <ul>
                                                    <li data-animation="animated fadeInUp">
                                                        @if (Auth::check())
                                                            <a href="#">Stay Connected</a>
                                                        @else
                                                            <a href="{{ route('frontend.register') }}">Register Now</a>
                                                        @endif
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content_img_wrapper">
                                        <img src="{{ asset('assets/images/banner2.webp') }}" alt="img">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-2">
                        <div class="container jn_container">
                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h1 data-animation="animated fadeInUp">Station Select ,
                                        </h1>
                                        .
                                        <h2 data-animation="animated fadeInUp"> Your Radio
                                        </h2>
                                        <p data-animation="animated fadeInUp"> <span>🌍 "Worldwide Audiences"🌍 </span>
                                            <br>
                                            <span>🎵 "Online Radio Directory"🎵</span> <br>
                                            <span> Submit Free Today</span>
                                        </p>
                                        <div class="slider_btn ms_cover">
                                            <div class="lang_apply_btn">
                                                <ul>
                                                    <li data-animation="animated fadeInUp">
                                                        @if (Auth::check())
                                                            <a href="#">Stay Connected</a>
                                                        @else
                                                            <a href="{{ route('frontend.register') }}">Register Now</a>
                                                        @endif
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content_img_wrapper">
                                        <img src="{{ asset('assets/images/banner.webp') }}" alt="img">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-3">
                        <div class="container jn_container">
                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h1 data-animation="animated fadeInUp">Station Select ,
                                        </h1>
                                        .
                                        <h2 data-animation="animated fadeInUp"> Your Radio
                                        </h2>
                                        <p data-animation="animated fadeInUp"> <span>🌍 "Worldwide Audiences"🌍 </span>
                                            <br>
                                            <span>🎵 "Online Radio Directory"🎵</span> <br>
                                            <span> Submit Free Today</span>
                                        </p>
                                        <div class="slider_btn ms_cover">
                                            <div class="lang_apply_btn">
                                                <ul>
                                                    <li data-animation="animated fadeInUp">
                                                        @if (Auth::check())
                                                            <a href="#">Stay Connected</a>
                                                        @else
                                                            <a href="{{ route('frontend.register') }}">Register Now</a>
                                                        @endif
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content_img_wrapper">
                                        <img src="{{ asset('assets/images/banner2.webp') }}" alt="img">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span
                            class="number"></span>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span
                            class="number"></span>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span
                            class="number"></span>
                    </li>
                </ol>
                <div class="carousel-nevigation">
                    <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"> <span>
                            prev</span> <i class="flaticon-arrow-1"></i>
                    </a>
                    <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <span>
                            next</span> <i class="flaticon-arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>



</div>

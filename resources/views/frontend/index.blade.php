@extends('frontend.master')
@section('custom')
    @include('frontend.body.banner')



    <style>
        /* Center Container for Station Cards */
        .container_categories_box {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            /* Center the cards */
            gap: 20px;
            /* Spacing between cards */
        }

        /* Station Card */
        .station-card {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 200px;
            text-decoration: none;
            color: #333;
            margin: 15px;
            background-color: #fff;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .station-card:hover {
            transform: scale(1.05);
        }

        /* Station Image Wrapper */
        .station-image {
            position: relative;
            width: 150px;
            height: 150px;
            overflow: hidden;
            border-radius: 50%;
            /* Circular image */
            margin-bottom: 15px;
        }

        /* Station Image */
        .station-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .station-image:hover img {
            transform: scale(1.1);
            /* Slight zoom on hover */
        }

        /* Play Button Overlay */
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: rgba(255, 255, 255, 0.8);
            font-size: 40px;
            opacity: 0;
            transition: opacity 0.3s ease, color 0.3s ease;
        }

        .station-image:hover .play-button {
            opacity: 1;
            color: #ff6600;
            /* Play button color on hover */
        }

        /* Station Name */
        .station-card h4 {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }

        /* Genre Text */
        .station-card span {
            font-size: 14px;
            color: #007bff;
            font-weight: 500;
        }

        /* Button */
        .button {
            padding: 10px 20px;
            font-size: 14px;
            text-transform: uppercase;
            color: #333;
            border: 2px solid #333;
            transition: color 0.3s, background-color 0.3s;
        }

        .button:hover {
            color: #fff;
            background-color: #333;
        }

        /* Center Container for Stations */
        .new_container_categories_box {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        /* Station Card */
        .new_station_card {
            width: 180px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            text-decoration: none;
            color: #333;
            transition: transform 0.3s ease;
        }

        .new_station_card:hover {
            transform: scale(1.05);
        }

        /* Station Image Wrapper */
        .station-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            position: relative;
        }

        .station-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        /* Zoom on Hover for Image */
        .station-image:hover img {
            transform: scale(1.1);
        }

        /* Play Button Overlay */
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: rgba(255, 255, 255, 0.8);
            font-size: 30px;
            opacity: 0;
            transition: opacity 0.3s ease, color 0.3s ease;
        }

        .station-image:hover .play-button {
            opacity: 1;
            color: #ff6600;
        }

        /* Station Name */
        .new_station_card h4 {
            font-size: 16px;
            font-weight: bold;
            margin: 10px 0;
        }

        /* Genre Badge */
        .genre-badge {
            font-size: 14px;
            color: #007bff;
            font-weight: 500;
        }

        .trending_slider_main_box1 {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            min-height: 25rem !important;
            max-height: 50rem !important;
        }

        .trending_slider_main_box1:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        .release_content_artist {
            padding: 15px;
            background-color: #fff;
            text-align: center;
        }

        .release_content_artist .title {
            font-weight: bold;
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 10px;
            text-decoration: none;
        }

        .release_content_artist .title:hover {
            color: #007bff;
        }

        .description {
            font-size: 0.9rem;
            margin-top: 10px;
            line-height: 1.5;
            max-height: 50rem !important;
        }

        .full-description {

            max-height: 50rem !important;

        }


        .read-more,
        .read-less {
            font-weight: bold;
            color: #007bff;
            cursor: pointer;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .read-more:hover,
        .read-less:hover {
            text-decoration: underline;
        }

        img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }


        .release_box_main_content1 {
            background: #fff;
            text-align: center;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            -ms-box-shadow: 0 4px 15px 0px rgba(248, 71, 62, 0.05);
            -moz-box-shadow: 0 4px 15px 0px rgba(248, 71, 62, 0.05);
            -webkit-box-shadow: 0 4px 15px 0px rgba(248, 71, 62, 0.05);
            box-shadow: 0 4px 15px 0px rgba(248, 71, 62, 0.05);
        }

        .release_box_main_content1 img {
            border-radius: 0;
            width: 100%;
        }

        .release_box_main_content1 p a {
            font-size: 18px;
            text-transform: capitalize;
            margin-bottom: 8px;
            color: #191919;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .release_box_main_content1 ul.tranding_more_option.tranding_open_option {
            right: 45px;
        }

        .download_wrapper {
            margin-bottom: 5rem !important;
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .card {
            width: 300px;
            padding: 20px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .card a {
            text-decoration: none;
            color: #1a73e8;
            font-weight: bold;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            padding: 5rem 0;

            background-color: #fff;
        }

        .card {
            width: 300px;
            padding: 20px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .card a {
            text-decoration: none;
            color: #1a73e8;
            font-weight: bold;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>


    <div class="row" style="display: flex; justify-content: center;width: 100%;">





        <div class="treanding_songs_wrapper treanding_index_wrapper ms_cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="ms_heading_wrapper">
                            <h1>Trending Genres</h1>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="treanding_song_slider">
                            <div class="owl-carousel owl-theme">
                                <div class="item">

                                    <div class="treanding_slider_main_box ms_cover">
                                        <img src="{{ asset('assets/images/80s.jpeg') }}" alt="img">
                                        <div class="ms_treanding_box_overlay">
                                            <div class="ms_tranding_box_overlay"></div>

                                            <div class="tranding_play_icon">
                                                <a href="{{ url('all-stations?genre=13') }}">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="item">

                                    <div class="treanding_slider_main_box ms_cover">
                                        <img src="{{ asset('assets/images/90s.jpeg') }}" alt="img">
                                        <div class="ms_treanding_box_overlay">
                                            <div class="ms_tranding_box_overlay"></div>

                                            <div class="tranding_play_icon">
                                                <a href="{{ url('all-stations?genre=14') }}">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="item">

                                    <div class="treanding_slider_main_box ms_cover">
                                        <img src="{{ asset('assets/images/blues.jpg') }}" alt="img">
                                        <div class="ms_treanding_box_overlay">
                                            <div class="ms_tranding_box_overlay"></div>

                                            <div class="tranding_play_icon">
                                                <a href="{{ url('all-stations?genre=5') }}">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="item">

                                    <div class="treanding_slider_main_box ms_cover">
                                        <img src="{{ asset('assets/images/alternative.jpeg') }}" alt="img">
                                        <div class="ms_treanding_box_overlay">
                                            <div class="ms_tranding_box_overlay"></div>

                                            <div class="tranding_play_icon">
                                                <a href="{{ url('all-stations?genre=4') }}">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="item">

                                    <div class="treanding_slider_main_box ms_cover">
                                        <img src="{{ asset('assets/images/country.jpg') }}" alt="img">
                                        <div class="ms_treanding_box_overlay">
                                            <div class="ms_tranding_box_overlay"></div>

                                            <div class="tranding_play_icon">
                                                <a href="{{ url('all-stations?genre=27') }}">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="item">

                                    <div class="treanding_slider_main_box ms_cover">
                                        <img src="{{ asset('assets/images/dance.jpeg') }}" alt="img">
                                        <div class="ms_treanding_box_overlay">
                                            <div class="ms_tranding_box_overlay"></div>

                                            <div class="tranding_play_icon">
                                                <a href="{{ url('all-stations?genre=6') }}">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




















        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="headline_part centered margin-top-75"> Featured Radios
                        <span>🌍 "Global Radio Stations"🌍 </span>
                        <span>🎵 "Online Radio Directory"🎵</span>
                        <span>📻 "Radios from Every Corner of the World"📻</span>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="container_categories_box margin-top-5 margin-bottom-30">
                        @foreach ($pro_stations as $pro_station)
                            @php
                                // Retrieve country and genre for each station
                                $country = App\Models\Country::where('id', $pro_station->country_id)->first();
                                $genre = App\Models\Genres::where('id', $pro_station->genres_id)->first();
                            @endphp
                            <a href="{{ route('station-details', $pro_station->slug) }}"
                                class="utf_category_small_box_part station-card">
                                <!-- Display station logo as an image with hover play button -->
                                <div class="station-image">
                                    <img src="{{ asset('images/logos/' . $pro_station->staion_logo) }}"
                                        alt="{{ $pro_station->name }}">
                                    <div class="play-button">
                                        <i class="fa fa-play-circle"></i>
                                    </div>
                                </div>
                                <h4>{{ $pro_station->name }}</h4>
                                <span style="color: white">{{ $genre->name ?? 'Unknown Genre' }}</span>
                            </a>
                        @endforeach
                    </div>
                    <div class="col-md-12 centered_content">
                        <a href="{{ route('pro') }}" class="button border margin-top-20">Get Your Radio Pro</a>
                    </div>
                </div>
            </div>

        </div>












        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="headline_part centered margin-top-50">New Added Radios</h3>
                <div class="d-flex flex-wrap justify-content-center new_container_categories_box mt-4 mb-4">
                    @foreach ($newest_stations as $new_station)
                        @php
                            $country = App\Models\Country::where('id', $new_station->country_id)->first();
                            $genre = App\Models\Genres::where('id', $new_station->genres_id)->first();
                        @endphp
                        <a href="{{ route('station-details', $new_station->slug) }}"
                            class="new_station_card text-center m-3 p-3">
                            <div class="station-image mx-auto position-relative">
                                <img src="{{ asset('images/logos/' . $new_station->staion_logo) }}"
                                    alt="{{ $new_station->name }}" class="img-fluid">
                                <div class="play-button d-flex justify-content-center align-items-center">
                                    <i class="fa fa-play-circle"></i>
                                </div>
                            </div>
                            <h4 class="mt-3">{{ $new_station->name }}</h4>
                            <span class="genre-badge">{{ $genre->name ?? 'Unknown Genre' }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>


































        <div class="treanding_songs_wrapper release_wrapper ms_cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="ms_heading_wrapper">
                            <h1>Why Choose Us?
                            </h1>
                        </div>


                    </div>


                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="tab-content">
                            <div id="home" class="tab-pane active">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                        <div class="trending_slider_main_box1 release_box_main_content1 ms_cover">
                                            <img src="{{ asset('assets/images/img1.webp') }}" alt="img"
                                                class="img-fluid">
                                            <div class="release_content_artist">
                                                <p>
                                                    <a href="#" class="title">Explore a World of Music and Talk
                                                        Shows🎶🎙️</a>
                                                </p>
                                                <p class="description">
                                                    <span class="short-description">
                                                        At StationSelect.com, we bring the world of...
                                                    </span>
                                                    <span class="full-description d-none scrollable-content">
                                                        At StationSelect.com, we bring the world of internet radio to your
                                                        fingertips. Dive into a diverse array of music genres, talk shows,
                                                        and live broadcasts from around the globe. Whether you're a casual
                                                        listener or a radio enthusiast, our platform is designed to enhance
                                                        your listening experience. At StationSelect.com, we bring the world
                                                        of internet radio to your fingertips. Dive into a diverse array of
                                                        music genres, talk shows, and live broadcasts from around the globe.
                                                        Whether you're a casual listener or a radio enthusiast, our platform
                                                        is designed to enhance your listening experience.
                                                    </span>
                                                    <a href="#" class="read-more">Read More</a>
                                                    <a href="#" class="read-less d-none">Read Less</a>
                                                </p>
                                            </div>
                                            <div class="ms_trending_box_overlay release_box_overlay">
                                                <div class="ms_trending_box_overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                        <div class="trending_slider_main_box1 release_box_main_content1 ms_cover">
                                            <img src="{{ asset('assets/images/img2.webp') }}" alt="img"
                                                class="img-fluid">
                                            <div class="release_content_artist">
                                                <p>
                                                    <a href="#" class="title">Your Go-To Internet Radio Directory
                                                        📻🌍</a>
                                                </p>
                                                <p class="description">
                                                    <span class="short-description">
                                                        Discover and enjoy your favorite radio stations...
                                                    </span>
                                                    <span class="full-description d-none scrollable-content">
                                                        Discover and enjoy your favorite radio stations with ease. Our
                                                        comprehensive directory makes it simple to find exactly what you're
                                                        looking for, from popular stations to hidden gems. With our
                                                        user-friendly interface, you can navigate through various categories
                                                        and explore new content effortlessly.
                                                    </span>
                                                    <a href="#" class="read-more">Read More</a>
                                                    <a href="#" class="read-less d-none">Read Less</a>
                                                </p>
                                            </div>
                                            <div class="ms_trending_box_overlay release_box_overlay">
                                                <div class="ms_trending_box_overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                        <div class="trending_slider_main_box1 release_box_main_content1 ms_cover">
                                            <img src="{{ asset('assets/images/img3.webp') }}" alt="img"
                                                class="img-fluid">
                                            <div class="release_content_artist">
                                                <p>
                                                    <a href="#" class="title">Submit Your Radio Station 📝🎤</a>
                                                </p>
                                                <p class="description">
                                                    <span class="short-description">
                                                        Are you a radio station owner? Join our ...
                                                    </span>
                                                    <span class="full-description d-none scrollable-content">
                                                        Are you a radio station owner? Join our growing community by
                                                        submitting your station to our directory. Gain exposure and reach a
                                                        wider audience with StationSelect.com. It's easy, quick, and a great
                                                        way to connect with new listeners.
                                                    </span>
                                                    <a href="#" class="read-more">Read More</a>
                                                    <a href="#" class="read-less d-none">Read Less</a>
                                                </p>
                                            </div>
                                            <div class="ms_trending_box_overlay release_box_overlay">
                                                <div class="ms_trending_box_overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 pd1">
                                        <div class="trending_slider_main_box1 release_box_main_content1 ms_cover">
                                            <img src="{{ asset('assets/images/img4.webp') }}" alt="img"
                                                class="img-fluid">
                                            <div class="release_content_artist">
                                                <p>
                                                    <a href="#" class="title">Personalized Recommendations 🎯❤️</a>
                                                </p>
                                                <p class="description">
                                                    <span class="short-description">
                                                        Our advanced algorithms tailor recommendations ...
                                                    </span>
                                                    <span class="full-description d-none scrollable-content">
                                                        Our advanced algorithms tailor recommendations based on your
                                                        listening habits. Enjoy a personalized radio experience that matches
                                                        your unique tastes and preferences. From the latest hits to classic
                                                        tracks, we have something for everyone.


                                                    </span>
                                                    <a href="#" class="read-more">Read More</a>
                                                    <a href="#" class="read-less d-none">Read Less</a>
                                                </p>
                                            </div>
                                            <div class="ms_trending_box_overlay release_box_overlay">
                                                <div class="ms_trending_box_overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.querySelectorAll('.read-more').forEach(btn => {
                            btn.addEventListener('click', function(e) {
                                e.preventDefault();
                                const parent = this.closest('.description');
                                parent.querySelector('.short-description').classList.add('d-none');
                                const fullDescription = parent.querySelector('.full-description');
                                fullDescription.classList.remove('d-none');
                                this.classList.add('d-none');
                                parent.querySelector('.read-less').classList.remove('d-none');
                                fullDescription.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'center'
                                });
                            });
                        });

                        document.querySelectorAll('.read-less').forEach(btn => {
                            btn.addEventListener('click', function(e) {
                                e.preventDefault();
                                const parent = this.closest('.description');
                                parent.querySelector('.short-description').classList.remove('d-none');
                                parent.querySelector('.full-description').classList.add('d-none');
                                this.classList.add('d-none');
                                parent.querySelector('.read-more').classList.remove('d-none');
                            });
                        });
                    </script>

                    <script>
                        document.querySelectorAll('.read-more').forEach(btn => {
                            btn.addEventListener('click', function(e) {
                                e.preventDefault();
                                const parent = this.closest('.description');
                                parent.querySelector('.short-description').classList.add('d-none');
                                parent.querySelector('.full-description').classList.remove('d-none');
                                this.classList.add('d-none');
                                parent.querySelector('.read-less').classList.remove('d-none');
                            });
                        });

                        document.querySelectorAll('.read-less').forEach(btn => {
                            btn.addEventListener('click', function(e) {
                                e.preventDefault();
                                const parent = this.closest('.description');
                                parent.querySelector('.short-description').classList.remove('d-none');
                                parent.querySelector('.full-description').classList.add('d-none');
                                this.classList.add('d-none');
                                parent.querySelector('.read-more').classList.remove('d-none');
                            });
                        });
                    </script>


                </div>
            </div>
        </div>












































        {{-- @include('frontend.body.side_content') --}}

    </div>





    <div class="download_wrapper ms_cover">
        <div class="concert_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="download_app_store ms_cover">
                        <h1>We Are the Most Popular Platform</h1>
                        <p>
                            Join millions of users who trust us for music, talk shows, and live broadcasts.
                            Stay connected and discover what’s trending across the globe with StationSelect.com!
                        </p>
                        <div class="app_btn ms_cover">
                            <a href="#">Follow Us Now</a>
                        </div>
                        <ul class="download_app_logo">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=61558112994637" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/447565167387" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>

                            {{-- <li><a href="#"><i class="fab fa-twitter"></i> </a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> </a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i> </a></li> --}}
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="download_mockup_design ms_cover">

                        <img src="{{ asset('assets/images/mockup.webp') }}" class="img-responsive" alt="img">
                    </div>
                </div>
            </div>

        </div>
    </div>















    <div class="container">
        <div class="row">
            <div class="col-md-12 margin-top-35">
                <h3 class="headline_part centered">Most Popular Stations</h3>
                <div class="container_categories_box margin-top-5 margin-bottom-30">
                    @foreach ($topStations as $topStation)
                        @php
                            // Retrieve country and genre for each station
                            $country = App\Models\Country::where('id', $topStation->country_id)->first();
                            $genre = App\Models\Genres::where('id', $topStation->genres_id)->first();
                        @endphp
                        <a href="{{ route('station-details', $topStation->slug) }}"
                            class="utf_category_small_box_part station-card">
                            <!-- Display station logo as an image with hover play button -->
                            <div class="station-image">
                                <img src="{{ asset('images/logos/' . $topStation->staion_logo) }}"
                                    alt="{{ $topStation->name }}">
                                <div class="play-button">
                                    <i class="fa fa-play-circle"></i>
                                </div>
                            </div>
                            <h4>{{ $topStation->name }}</h4>
                            <span style="color: white">{{ $genre->name ?? 'Unknown Genre' }}</span>
                        </a>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
























    <hr>




    <div class="card-container">
        <!-- Card 1 -->
        <div class="card">
            <a href="https://costeffectivehost.site">
                <img src="https://stationselect.com/public/images/costeff.png" alt="Cost Effective Hosting">
                <p>COST EFFECTIVE HOSTING</p>
            </a>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <a href="http://onlineaudience.co.uk/billing/store/offers/radio-app-1">
                <img src="https://stationselect.com/public/images/Add a heading.png" alt="Cost Effective Hosting">
                <p>GET A RADIO APP</p>
            </a>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <a href="http://onlineaudience.co.uk/billing/store/offers/alexia-radio-skill-1">
                <img src="https://stationselect.com/public/images/alexa.png" alt="Cost Effective Hosting">
                <p>ALEXA PLAY MY RADIO</p>
            </a>
        </div>
    </div>

    <section class="utf_cta_area_item utf_cta_area2_block">
        <div class="container" style="max-width: 80%; text-align: center;">
            <div class="row">
                <div class="col-md-12">
                    <div class="utf_subscribe_block clearfix">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <h2 class="utf_sec_title_item utf_sec_title_item2" style="font-size: 24px;">Advertise at
                                    Station Select</h2>
                                <p class="utf_sec_meta" style="font-size: 14px;">
                                    At StationSelect, we're committed to bringing you the best in global radio. Our platform
                                    makes it easy
                                    to explore a wide range of content, from music and news to engaging talk shows. Discover
                                    and enjoy radio
                                    like never before.
                                </p>
                                <p class="utf_sec_meta" style="font-size: 14px;">
                                    Promote your business on every page of our site for just £30 a month.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 centered_content">
                            <a href="mailto:onlineaudienceltd@gmail.com" class="utf_theme_btn"
                                style="padding: 10px 20px; font-size: 14px;">
                                Advertise Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

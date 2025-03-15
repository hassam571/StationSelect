@extends('frontend.master')
@section('custom')


@include('frontend.body.banner')

 





    <div class="container">
        <div class="breadcrumbs_outer">
            <nav class="breadcrumbs">
                <a href="{{ route('frontend.index') }}">Home</a>&ensp;<img src="{{ asset('assets/frontend/img/bullet1.png') }}" alt="bullet">&ensp;Stations
            </nav>
            <div class="breadcrumbs_filter"></div>
        </div>
        
        <div class="radio_content_area col-lg-8 col-md-8 col-sm-8" style="display: flex; flex-flow: column;">
            <div class="radio_filter_area">
                <h3 class="headline_part centered">All Radio Stations</h3>
                @include('frontend.body.filter')
                <!-- Include your filter component here -->
            </div>

            <div class="radio_container margin-top-10">
                <!-- Station Grid Section -->
                <div class="container_categories_box"> <!-- Updated class name -->
                    @foreach ($stations as $station)
                    @php
                        // Retrieve country and genre for each station
                        $country = App\Models\Country::where('id', $station->country_id)->first();
                        $genre = App\Models\Genres::where('id', $station->genres_id)->first();
                    @endphp
                    <a href="{{ route('station-details', $station->slug) }}" class="station-card"> <!-- Updated class name -->
                        <div class="station-image"> <!-- Updated class name -->
                            <img src="{{ asset('images/logos/' . $station->staion_logo) }}" alt="{{ $station->name }}">
                            <div class="play-button"> <!-- Updated class name -->
                                <i class="fa fa-play-circle"></i>
                            </div>
                        </div>
                        <h4 class="radio_station_name">{{ $station->name }}</h4>
                        <span class="radio_genre">{{ $genre->name ?? 'Unknown Genre' }}</span>
                    </a>
                    @endforeach
                </div>

                <!-- Pagination Section -->
                <div class="radio_pagination_area">
                    {{ $stations->links() }}
                </div>
            </div>
        </div>

        @include('frontend.body.side_content')

        <div class="clear"></div>
    </div>


@endsection

<!-- Pixel Code for https://sales.onlineaudience.uk/ -->
<script defer src="https://sales.onlineaudience.uk/pixel/21qdl7u36bkd4kdvrsunjxe1d8k7umj5"></script>
<!-- END Pixel Code -->

<style>
    /* Center Container for Station Cards */
    .container_categories_box {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; /* Center the cards */
        gap: 20px; /* Spacing between cards */
    }

    /* Station Card */
    .station-card {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 200px; /* Fixed width for cards */
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
        width: 150px; /* Fixed width for images */
        height: 150px; /* Fixed height for images */
        overflow: hidden;
        border-radius: 50%; /* Circular image */
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
        transform: scale(1.1); /* Slight zoom on hover */
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
        color: #ff6600; /* Play button color on hover */
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
</style>

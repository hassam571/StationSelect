@extends('frontend.master')

@section('custom')
@include('frontend.body.banner')
    <div class="container_content">
        <div class="container_center">
            <div class="breadcrumbs_outer">
                <nav class="breadcrumbs">
                    <a href="/">Home</a>&ensp;<img src="/img/bullet1.png" alt="">&ensp;Favourite Stations
                </nav>
                <div class="breadcrumbs_spacer"></div>
            </div>
            <main class="content_main">
                <div class="list_stations">
                    <div class="list_header clearfix">
                        <h3 class="heading_large heading_list">Favourite stations</h3>
                    </div>
                    <div class="list_body clearfix">
                        @foreach ($favoriteStations as $station)

                        <article class="list_item" itemscope itemtype="https://schema.org/RadioStation">
                            <div class="bg">
                                <a class="image_outer" href="{{ route('station-details',$station->slug) }}">
                                    <span class="image"><img
                                            src="{{ asset('images/logos/'.$station->staion_logo) }}"
                                            alt="{{ $station->name }}" itemprop="image" /></span>
                                    @php
                                        $country = App\Models\Country::where('id',$station->country_id)->first();

                                    @endphp
                                    <span class="overlay"></span>
                                    <span class="country">{{ $country->name }}</span>
                                </a>
                                <div class="name" itemprop="name"><a href="{{ route('station-details',$station->slug) }}">{{ $station->name }}</a></div>
                                @php
                                    $genre = App\Models\Genres::where('id',$station->genres_id)->first();

                                @endphp
                                <div class="genre">{{ $genre->name }}</div>
                            </div>
                        </article>
                        @endforeach

                    </div>
                    <div class="paging">
                        {{-- pagination --}}
                    </div>
                </div>
                {{-- <div class="block_text">
                    <div class="block_header">
                        <h2 class="heading_small">My Stations</h2>
                    </div>
                    <div class="block_content"></div>
                </div> --}}
            </main>
           @include('frontend.body.side_content')
            <div class="clear"></div>
        </div>
    </div>
@endsection

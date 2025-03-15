@extends('frontend.master')

@section('custom')
    <div class="container_content">
        <div class="container_center">
            <div class="breadcrumbs_outer">
                <nav class="breadcrumbs">
                    <a href="{{ route('frontend.index') }}">Home</a>&ensp;<img src="{{ asset("assets/frontend/img/bullet1.png") }}" alt />&ensp;Help
                </nav>
                <div class="breadcrumbs_spacer"></div>
            </div>
            <main class="content_main">
                <div class="view">
                    <h1 class="view_header heading_large">Help</h1>
                    <p><strong>To be able to listen to thousands of free radio stations from around the world you need to follow three simple steps:</strong></p>
                    <p><strong>Step 1 - Make sure that your computer is ready to play the audio broadcast</strong></p>
                    <p><strong>Step 2 - Find the right radio</strong></p>
                    <p><strong>Step 3 - Listen to your favorite radio station</strong></p>
                    <p><strong>1.&nbsp;</strong>Ensure that your computer is connected to an audio headset and you have a stable internet connection, also you need a connected sound card. The faster the computer and Internet connection, the better sound you&rsquo;ll get.</p>
                    <p>Install RealPlayer, Windows Media Player, Winamp, QuickTime Player or Flashpalyer if you don&rsquo;t have any of these players on your computer (depending on the player used to broadcast your radio).</p>
                    <p><strong>2.&nbsp;</strong>At the top of each page you can find a search box where you can enter a keyword or phrase and press the search button to see the result you are interested in.</p>
                    <p>Search by Genre - Choose the preferred music genre from the full list at <a href="{{ route('genres') }}">https://www.stationselect.com/genres</a>.</p>
                    <p><a href="{{ route('countries') }}">Search by country</a> - at the top of each page, select region to see a list of countries. Choose the preferred country and enjoy your favorite radio.</p>
                    <p><strong>3. </strong>After you have selected the right radio station, the live stream will start automatically.</p>
                    </div>
            </main>
            @include('frontend.body.side_content')
            <div class="clear"></div>
        </div>
    </div>
@endsection

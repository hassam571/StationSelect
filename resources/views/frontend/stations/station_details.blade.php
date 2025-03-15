@extends('frontend.master')
@section('custom')
<meta property="og:image" content="{{ asset('images/logos/' . $station->staion_logo) }}" />
<meta property="og:url" content="{{ route('station-details', $station->slug) }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $station->name }}" />
<meta property="og:description" content="{{ $station->description }}" />
    <!--Template style -->

    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}" />



<!-- Flaticon CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-dY+2cXLIcK0SM6IJGNdNsYAx3A1bRfPbtHV5RyRCpH9rh6/hfpftV74xzOSYCRl7/4GZB4qz1Lse6Xi7Vw9blA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- FontAwesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


<style>.control-primary {
    text-align: center;
}

.control-primary a {
    display: inline-block;
    width: 50px; /* Consistent width for all buttons */
    height: 50px; /* Consistent height for all buttons */
    text-align: center;
    vertical-align: middle;
}

.play-pause-container {
    display: inline-block;
    width: 20px !important;
    height: 30px !important;
    position: relative; /* Required for toggling visibility */
}

.jp-play,
.jp-pause {
    width: 20px !important;
    height: 30px !important;
    vertical-align: middle;
    /* margin-top: 4px !important; */

}



.jp-play:hover svg,
.jp-pause:hover svg,
.jp-previous:hover svg,
.jp-next:hover svg {
    fill: #007bff; /* Hover effect for better feedback */
    cursor: pointer;
}
.jp-pause,.jp-play{
    margin-right: 0 !important
}



.jp-title{    background-color: transparent !important; color:rgb(248, 71, 62) !important; margin-top: 13px !important;}








</style>


@include('frontend.body.banner')
<style>

.jp_controls_wrapper{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: row;
}

@media (max-width: 1050px) {
    .jp-repeat{
        display: none !important;
    }
     .jp_repeat_responsive{
        display: none !important;
    }
    .jp-shuffle{
        display: none !important;
    }
    .jp-volume-controls {
        display: none !important;
    }
    .jp-pause.d-none,.hide1 {
    display: none; /* Hide pause button when inactive */
}
}
</style>
<div class="container_content">
    <div class="container">
        <div class="breadcrumbs_outer">
            <nav class="breadcrumbs">
                <a href="{{ route('frontend.index') }}">Home</a>&ensp;<img
                    src="{{ ("assets/frontend/img/bullet1.png") }}" alt />&ensp;Stations
            </nav>
            <div class="breadcrumbs_spacer"></div>
        </div>
        <div class="col-lg-8 col-md-8">
            <div itemscope itemtype="http://schema.org/RadioStation">
                <div class="view">
                    <div class="view_header_station clearfix">
                        <div class="sharing">
                            <div class="sharing_item">
                                <a target="_blank"
                                    href="https://www.facebook.com/sharer.php?u={{ route('station-details',$station->slug) }}"
                                    class="twitter-share-button"><img
                                        src="{{ asset('images/banner_images/share.png') }}" width="40px;" height="40px"
                                        alt="Facebook Share"></a>

                                <script type="1eb02db562da5871113d1fda-text/javascript">
                                    ! function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0],
                                            p = /^http:/.test(d.location) ? 'http' : 'https';
                                        if (!d.getElementById(id)) {
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = p + '://platform.twitter.com/widgets.js';
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }
                                    }(document, 'script', 'twitter-wjs');
                                </script>
                            </div>
                            <div class="sharing_item">
                                <div class="fb-like" data-send="false" data-layout="button_count" data-width="90"
                                    data-show-faces="false" data-href="https://www.liveradio.uk/stations/scouse-radio">
                                </div>
                                <div id="fb-root"></div>
                                <script type="1eb02db562da5871113d1fda-text/javascript">
                                    (function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "../../connect.facebook.net/en_US/all.js#xfbml=1";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                </script>
                            </div>
                            <div class="clear">
                                <!-- -->
                            </div>
                        </div>
                        <h3 class="heading_small">Radio station</h3>
                    </div>
                    <figure class="view_image">
                        <img src="{{ asset('images/logos/' . $station->staion_logo) }}" style="width:100%"
                            alt="Scouse Radio" itemprop="image" />
                    </figure>
                    <div class="view_data">
                        <h1 class="view_name" itemprop="name">{{ $station->name }}</h1>
                        <table class="view_details_table" cellspacing="0" cellpadding="0">
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Country:</td>
                                @php
                                $country = App\Models\Country::where('id', $station->country_id)->first();

                                @endphp
                                <td itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                    <span itemprop="addressCountry"><a class="link"
                                            href="{{ route('all-stations', ['country' => $station->country_id]) }}">{{ $country->name }}</a></span>

                                </td>
                            </tr>
                            <tr>
                                <td>Genre:</td>
                                @php
                                $genre = App\Models\Genres::where('id', $station->genres_id)->first();

                                @endphp
                                <td itemscope itemtype="http://schema.org/CreativeWork">
                                    <span itemprop="genre"><a class="link"
                                            href="{{ route('all-stations', ['genre' => $station->genres_id]) }}">{{ $genre->name }}</a></span>,

                                </td>
                            </tr>
                            <tr>
                                <td>Website:</td>
                                <td>
                                    <a class="link" href="{{ $station->station_website }}" target="_blank"
                                        rel="nofollow"
                                        itemprop="url">{{ str_replace('https://', '', $station->station_website) }}
                                    </a>
                                </td>
                            </tr>
                            <tr class="mt-2">
                                <td>Social:</td>
                                <td>
                                    <a href="{{ $station->fb_link }}"><img
                                            src="{{ asset("assets/frontend/img/social_facebook.png") }}"
                                            alt="Facebook" /></a>
                                    <a href="{{ $station->insta_link }}"><img
                                            src="{{ asset("assets/frontend/img/social_insta.png") }}"
                                            alt="Instagram" /></a>
                                    <a href="{{ $station->tiktok_link }}"><img
                                            src="{{ asset("assets/frontend/img/social_tiktok.png") }}"
                                            alt="Tiktok" /></a>
                                    <a href="{{ $station->x_link }}"><img
                                            src="{{ asset("assets/frontend/img/social_twitter.png") }}"
                                            alt="Twitter" /></a>
                                </td>
                            </tr>
                            {{-- <tr>
                                    <td>Rating:</td>
                                    <td itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                        <ul id="star_rating" class="star_rating">
                                            <li><b style="width: 4.16em">4.16</b></li>
                                            <li><a href="#" class="star1" tabindex="-1">1</a></li>
                                            <li><a href="#" class="star2" tabindex="-1">2</a></li>
                                            <li><a href="#" class="star3" tabindex="-1">3</a></li>
                                            <li><a href="#" class="star4" tabindex="-1">4</a></li>
                                            <li><a href="#" class="star5" tabindex="-1">5</a></li>
                                        </ul>
                                        <script type="1eb02db562da5871113d1fda-text/javascript">
                      $('#star_rating a').click({station_id: '483811', element: 'star_rating'}, rate);
                    </script>
                                        <meta itemprop="ratingValue" content="4.16" />
                                        <meta itemprop="bestRating" content="5" />
                                        <meta itemprop="worstRating" content="0" />
                                        <meta itemprop="ratingCount" content="19" />
                                    </td>
                                </tr> --}}
                        </table>
                    </div>
                    <div class="clear"></div>





























                    {{-- <div class="view_player">
                        <div id="jp_jplayer_1" class="jp-jplayer"></div>
                        <div id="jp_container_1" class="jp-audio">
                            <div class="jp-type-single">
                                <div class="jp-gui jp-interface">
                                    <ul class="jp-controls">
                                        <li>
                                            <a href="javascript:;" class="jp-play" tabindex="1">play</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="jp-pause" tabindex="1">pause</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="jp-stop" tabindex="1">stop</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="jp-unmute" tabindex="1"
                                                title="unmute">unmute</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="jp-volume-max" tabindex="1"
                                                title="max volume">max volume</a>
                                        </li>
                                    </ul>
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div class="jp-play-bar"></div>
                                        </div>
                                    </div>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value"></div>
                                    </div>
                                    <div class="jp-current-time"></div>
                                    <div class="jp-duration"></div>
                                    <ul class="jp-toggles">
                                        <li>
                                            <a href="javascript:;" class="jp-repeat" tabindex="1"
                                                title="repeat">repeat</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="jp-repeat-off" tabindex="1"
                                                title="repeat off">repeat off</a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="jp_title" class="jp-title">
                                    <ul>
                                        <li>{{ $station->name }}</li>
                                    </ul>
                                </div>
                                <div class="jp-no-solution">
                                    <span>Update Required</span>
                                    To play the media you will need to either update your
                                    browser to a recent version or update your
                                    <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                </div>
                            </div>
                        </div>
                        <script>
                            var count = 0;
                            var BASE = '/';

                            function getstreamtitle() {
                                $.ajax({
                                    type: 'GET',
                                    url: BASE + 'stream',
                                    data: 'location={{ $station->streaming_link }}',
                                    async: true,
                                    success: function(data) {
                                        showstreamtitle(data);
                                    },
                                    dataType: 'json'
                                });
                            }

                            function showstreamtitle(data) {
                                if (data && data.streamtitle) {
                                    $('#jp_title ul li').text(data.streamtitle);
                                    count = -1;
                                } else {
                                    if (count >= 0) {
                                        count++;
                                    }
                                }
                                if (count <= 3) {
                                    setTimeout(getstreamtitle, 20 * 1000);
                                }
                            }
                            $(document).ready(function() {
                                $('#jp_jplayer_1').jPlayer({
                                    ready: function() {
                                        $(this).jPlayer('setMedia', {
                                            mp3: '{{ $station->streaming_link }}',
                                        }).jPlayer('play');
                                    },
                                    swfPath: BASE + 'lib/jplayer',
                                    supplied: 'mp3',
                                    preload: 'none',
                                    solution: 'html, flash',
                                    volume: 0.5,
                                });
                                getstreamtitle();
                            });
                        </script>
                    </div> --}}




<style>
.play-pause-container {
    position: relative;
    width: 50px; /* Adjust size as needed */
    height: 50px; /* Adjust size as needed */
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 25px !important;
}
.des{margin-top: 15px !important;}
.jp-play,
.jp-pause {
    position: absolute;
    top: -20px;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 !important;
    transition: opacity 0.3s ease; /* Smooth transition for visibility */
}

.jp-pause {
    display: none; /* Hidden by default */
}

.jp-play.active {
    display: none; /* Hide play button when active */
}

.jp-pause.active {
    display: flex; /* Show pause button when active */
}



/* General styles for the control-primary container */
.control-primary {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px; /* Space between buttons */
}

/* Common button styles */
.control-primary a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px; /* Fixed size for all buttons */
    height: 50px;
    text-align: center;
    vertical-align: middle;
    transition: all 0.3s ease; /* Smooth animations */
}

/* Styling the SVG icons */
.control-primary a span svg {
    width: 24px; /* Adjust icon size */
    height: 24px;
    fill: #6c757d; /* Default icon color */
    transition: fill 0.3s ease;
}

.control-primary a:hover span svg {
    fill: #f8473e; /* Highlight color on hover */
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .control-primary {
        flex-direction: row; /* Align buttons horizontally */
        gap: 15px; /* Increase spacing for better touch interaction */
    }

    .control-primary a {
        width: 40px; /* Adjust button size for smaller screens */
        height: 40px;
    }

    .control-primary a span svg {
        width: 20px; /* Adjust icon size for smaller buttons */
        height: 20px;
    }
    .jp-progress{top: 0px !important}
}

/* Small screen alignment */
@media (max-width: 480px) {
    .control-primary {
        gap: 10px; /* Slightly reduce spacing */
    }

    .control-primary a {
        width: 35px; /* Further reduce button size */
        height: 35px;
    }

    .control-primary a span svg {
        width: 18px; /* Adjust icon size */
        height: 18px;
    }
}
.jp-progress{left:0 !important;}
.icon-play svg, .icon-pause svg{z-index: 10000 !important; position: absolute !important; left: 2px !important}
</style>




                    <div class="adonis-player-wrap">
                        <div id="adonis_jp_container" class="master-container-holder" role="application" aria-label="media player">
                            <div id="adonis_jplayer_main" class="jp-jplayer"></div>
                            <div class="adonis-player-horizontal">
                                <div class="master-container-fluid">
                                    <div class="row adonis-player">
                                        <!-- Current Song Info and Poster -->
                                        <div class="col-sm-4 col-lg-4 col-xl-3 col-4">
                                            <div class="media current-item">

                                                <div class="des">
                                                    <div class="jp-title" aria-label="title">{{ $station->name ?? 'Unknown Station' }}</div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Player Controls -->
                                        <div class="col-sm-8 col-lg-6 col-xl-6 col-4 resp">
                                            <div class="player-controls">



                                                <div class="control-primary">
                                                    <a class="jp-previous" role="button" tabindex="0">
                                                        <span class="adonis-icon icon-4x">   <svg
                                                            version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 58 32"
                                                          >
                                                            <path
                                                              d="M55.064 0.272l-25.2 14.192c-0.555 0.299-0.925 0.876-0.925 1.54s0.371 1.241 0.916 1.535l0.009 0.005c1.336 0.784 23.64 13.344 25.256 14.216 0.265 0.162 0.585 0.258 0.928 0.258 0.986 0 1.787-0.793 1.8-1.777v-28.433c0-0.004 0-0.009 0-0.014 0-0.999-0.809-1.808-1.808-1.808-0.362 0-0.7 0.107-0.983 0.29l0.007-0.004zM26.12 0.272c-1.112 0.624-23.304 13.12-25.192 14.192-0.555 0.299-0.925 0.876-0.925 1.54s0.371 1.241 0.916 1.535l0.009 0.005c1.36 0.8 23.64 13.344 25.248 14.216 0.265 0.161 0.586 0.257 0.928 0.257 0.987 0 1.79-0.792 1.808-1.775l0-0.002v-28.432c0-0.001 0-0.003 0-0.005 0-1.003-0.813-1.816-1.816-1.816-0.362 0-0.7 0.106-0.983 0.289l0.007-0.004z"
                                                            ></path></svg></span>
                                                    </a>
                                                    <div class="play-pause-container">
                                                        <a href="javascript:;" class="jp-play" tabindex="10">
                                                            <span class="adonis-icon icon-play icon-3x">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                                                    <path
                                                                        d="M27.703 14.461l-24.945-14.187c-0.272-0.174-0.604-0.278-0.96-0.278-0.993 0-1.798 0.805-1.798 1.798 0 0.001 0 0.002 0 0.004v-0 28.434c0.004 0.982 0.801 1.776 1.783 1.776 0.338 0 0.653-0.094 0.922-0.257l-0.008 0.004c1.524-0.869 23.65-13.44 25.006-14.217 0.549-0.303 0.914-0.878 0.914-1.539s-0.366-1.236-0.905-1.534l-0.009-0.005z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a  href="javascript:;" class="jp-pause" tabindex="10">
                                                            <span class="adonis-icon icon-pause icon-3x">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                                                    <path d="M19.2 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z"></path>
                                                                    <path d="M1.6 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>

                                                    <a class="jp-next" role="button" tabindex="0">
                                                        <span class="adonis-icon icon-4x"><svg
                                                            version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 58 32"
                                                          >
                                                            <path
                                                              d="M28 14.464l-25.216-14.192c-0.276-0.179-0.614-0.286-0.976-0.286-0.999 0-1.808 0.809-1.808 1.808 0 0.005 0 0.010 0 0.015v-0.001 28.432c0.013 0.985 0.814 1.778 1.8 1.778 0.343 0 0.663-0.096 0.936-0.262l-0.008 0.005c1.6-0.872 23.896-13.432 25.256-14.216 0.559-0.298 0.934-0.877 0.934-1.544 0-0.66-0.367-1.235-0.908-1.531l-0.009-0.005zM56.944 14.464l-25.216-14.192c-0.276-0.179-0.614-0.286-0.976-0.286-0.999 0-1.808 0.809-1.808 1.808 0 0.005 0 0.010 0 0.015v-0.001 28.432c0.013 0.985 0.814 1.778 1.8 1.778 0.343 0 0.663-0.096 0.936-0.262l-0.008 0.005c1.6-0.872 23.888-13.432 25.256-14.216 0.55-0.303 0.917-0.879 0.917-1.54s-0.367-1.237-0.908-1.535l-0.009-0.005z"
                                                            ></path></svg></span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Volume and Playlist Controls -->
                                        <div class="col-sm-4 col-lg-4 col-xl-3 col-4 hide1">
                                            <div class="jp_controls_wrapper">
                                                <!-- Volume Controls -->
                                                <div class="jp-volume-controls">

                                                    <div class="jp-volume-bar d-flex align-items-center">
                                                        <div class="jp-volume-bar-value"></div>
                                                    </div>
                                                </div>

                                                <div class="jp_current_time_wrapper d-none d-lg-block">
                                                    <div class="jp-current-time" role="timer" aria-label="time"></div>
                                                    <div
                                                    class="jp-duration"
                                                    role="timer"
                                                    aria-label="duration"
                                                  ></div>                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Progress Bar -->
                                <div class="jp-progress d-flex align-items-center jp-progress-pos-top">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar"></div>
                                      </div>
                                </div>
                            </div>

                            <!-- Playlist Section -->
                            <div id="adonis-playlist" class="adonis-playlist off-canvas off-canvas-right">
                                <div class="adonis-playlist-player adonis-player player-bg-yellow">
                                    <a class="close-offcanvas" data-target="#adonis-playlist" href="#">
                                        <span class="adonis-icon icon-3x">❌</span>
                                    </a>
                                    <div class="blurred-bg-wrap">
                                        <div class="blurred-bg"></div>
                                    </div>
                                    <div class="media current-item">
                                        {{-- <div class="song-poster">
                                            <img class="box-rounded-sm" src="{{ $station->poster ?? asset('assets/images/default-poster.jpg') }}" alt="Station Poster" />
                                        </div> --}}
                                        <div class="player-details col-8">
                                            <h3 class="jp-title">{{ $station->name ?? 'Unknown Song' }}</h3>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
                    <script src="{{ asset('assets/js/jplayer/jquery.jplayer.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $('#adonis_jplayer_main').jPlayer({
            ready: function () {
                $(this).jPlayer('setMedia', {
                    mp3: '{{ $station->streaming_link }}',
                }).jPlayer('play');
            },
            swfPath: '{{ asset("assets/js/jplayer") }}',
            supplied: 'mp3',
            preload: 'none',
            solution: 'html, flash',
            volume: 0.5,
        });
    });
</script>


<script>
    var count = 0;
    var BASE = '/';

    function getstreamtitle() {
        $.ajax({
            type: 'GET',
            url: BASE + 'stream',
            data: 'location={{ $station->streaming_link }}',
            async: true,
            success: function(data) {
                showstreamtitle(data);
            },
            dataType: 'json'
        });
    }

    function showstreamtitle(data) {
        if (data && data.streamtitle) {
            $('#jp_title ul li').text(data.streamtitle);
            count = -1;
        } else {
            if (count >= 0) {
                count++;
            }
        }
        if (count <= 3) {
            setTimeout(getstreamtitle, 20 * 1000);
        }
    }
    $(document).ready(function() {
        $('#jp_jplayer_1').jPlayer({
            ready: function() {
                $(this).jPlayer('setMedia', {
                    mp3: '{{ $station->streaming_link }}',
                }).jPlayer('play');
            },
            swfPath: BASE + 'lib/jplayer',
            supplied: 'mp3',
            preload: 'none',
            solution: 'html, flash',
            volume: 0.5,
        });
        getstreamtitle();
    });
</script>







                    <div class="view_link">
                        <span id="not_playing">
                            <a href="javascript:void(0)" rel="nofollow" id="report_issue_link">Not playing? Report a
                                broken radio station</a><br />
                            <small id="issue_report">Note: depending on browser you may have to start player
                                manually</small>
                        </span>
                    </div>

                    <div class="view_favourites">
                        @if (auth()->guard('web')->check())
                        @php
                        $existingFavorite = App\Models\Favourite::where('user_id', auth()->id())
                        ->where('radio_id', $station->id)
                        ->exists();
                        @endphp
                        <a id="favourites_toggle" href="javascript:void(0);"
                            onclick="toggleFavorites({{ auth()->id() }}, {{ $station->id }})">{{ $existingFavorite ? 'Remove From Favorites' : 'Add to Favorites' }}</a>
                        @else
                        <a href="{{ route('frontend.login') }}">Login to add to favorites</a>
                        @endif
                    </div>
                    <table class="view_streams_table" cellspacing="0" cellpadding="0">
                        <tr>
                            <th style="width: 64%">External Live Stream</th>
                            <th style="width: 18%">Format</th>
                            <th style="width: 18%">Bitrate</th>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ $station->streaming_link }}">{{ $station->streaming_link }}</a>
                            </td>
                            <td>mp3</td>
                            <td>128</td>
                        </tr>
                    </table>
                    <div class="view_description" itemprop="description">
                        <p>{{ $station->description }}</p>
                    </div>
                    <div class="view_gallery">
                        <img src="{{ asset('images/banner_images/' . $station->staion_banner) }}" alt="Scouse Radio" />
                    </div>
                    <div class="clear"></div>
                </div>
                <hr class="hr_view" />
                <div class="comments">
                    <div class="comments_header clearfix">
                        <h3 class="heading_small left">Comments</h3>
                    </div>
                    <h5 style="color: coral" id="success_message"></h5>
                    <div id="comments_edit" class="edit_comments" style="display: block;"> <br>
                        <form id="form_comments" action="">
                            <table class="form_comments_table" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <th style="width: 20%;"></th>
                                        <th style="width: 80%;"></th>
                                    </tr>
                                    <tr>
                                        <td><label for="author_name" class="label">Name *</label></td>
                                        <td><input type="text" id="author_name" name="name" size="40" maxlength="100"
                                                value="" class="textbox" style="width: 100%;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="text" class="label">Comment *</label></td>
                                        <td>
                                            <textarea id="text" name="text" maxlength="10000" class="textarea"
                                                style="width: 100%; height: 100px;"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button type="button" id="comments_submit" class="button_regular"
                                                style="float: right;">Submit</button></td>
                                    </tr>

                                </tbody>
                            </table>

                        </form>
                        <script>
                            $('#comments_submit').click(function() {
                                var station_id = {{ request()->route('slug') }};
                                var BASE = '/';
                                var successMessage = 'Comment Submitted successfully for Admin Approval';
                                // Get CSRF token value from the page meta tag
                                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                                // Add CSRF token and station_id to the serialized form data
                                var formData = $('#form_comments').serialize() + '&_token=' + csrfToken +
                                    '&radio_list_id=' +
                                    station_id;
                                // Send AJAX request
                                $.ajax({
                                    type: 'POST',
                                    url: "{{ route('comment') }}",
                                    data: formData,
                                    async: true,
                                    dataType: 'json',
                                    success: function(response) {
                                        // Check if there is a message in the response
                                        if (response.message) {
                                            // Hide the comment form and display success message
                                            $('#comments_edit').hide();
                                            $('#success_message').text(successMessage);
                                        } else {
                                            // Handle other responses or conditions if needed
                                        }
                                    },
                                    error: function(xhr, status, error) {
                                        // Handle error response if needed
                                        console.error('Error:', error);
                                    }
                                });
                            });
                        </script>

                    </div>

                    <div id="comments_list" class="list_comments">

                        @if($comments->isEmpty())
                        <div class="list_empty">No comments</div>
                        @else
                        @foreach($comments as $comment)
                        <div class="comment" style="border:1px solid gray; padding: 5px; margin-bottom:4px">
                            <h1><img src="{{ asset('assets/frontend/img/user.png') }}" alt="User">{{ $comment->name }}
                            </h1>
                            <small><img src="{{ asset('assets/frontend/img/clock.png') }}" width="15px" height="15px"
                                    alt=""> &nbsp; {{ $comment->updated_at->diffForHumans() }}</small>
                            <br><br>
                            <p>{{ $comment->comment }}</p>
                        </div>
                        @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <!-- Similar Stations Widget -->
            <div class="utf_box_widget margin-top-35">
                <h3><i class="sl sl-icon-radio"></i> Similar Stations</h3>
                <ul class="utf_listing_detail_sidebar list_stations_side clearfix">
                    @php
                    $similar_stations = App\Models\RadioList::where('country_id', $station->country_id)
                    ->orWhere('genres_id', $station->genres_id)
                    ->get();
                    @endphp
                    @foreach ($similar_stations as $similar)
                    <li class="list_item clearfix" itemscope itemtype="http://schema.org/RadioStation">
                        <div class="image">
                            <a href="{{ route('station-details', $similar->slug) }}">
                                <img src="{{ asset('images/logos/' . $similar->staion_logo) }}"
                                    alt="{{ $similar->name }}" itemprop="image" style="width:100%" />
                            </a>
                        </div>
                        <div class="content">
                            <div class="name" itemprop="name">
                                <a href="{{ route('station-details', $similar->slug) }}">{{ $similar->name }}</a>
                            </div>
                            @php
                            $genre = App\Models\Genres::where('id', $similar->genres_id)->first();
                            @endphp
                            <div class="genre">{{ $genre->name }}</div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Account Options Widget -->
            <div class="utf_box_widget margin-top-35">
                <h3><i class="sl sl-icon-user"></i> Account Options</h3>
                <ul class="utf_listing_detail_sidebar">
                    <li><i class="fa fa-angle-double-right"></i> <a href="{{ route('add-station') }}">Submit Station</a>
                    </li>
                    <li><i class="fa fa-angle-double-right"></i> <a href="{{ route('frontend.register') }}">Register</a>
                    </li>
                    <li><i class="fa fa-angle-double-right"></i> <a href="{{ route('frontend.login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.js') }}"></script>
<script src="{{ asset('assets/js/plugin.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/comboTreePlugin.js') }}"></script>
<script src="{{ asset('assets/js/mp3/jquery.jplayer.min.js') }}"></script>
<script src="{{ asset('assets/js/mp3/jplayer.playlist.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/mp3/player.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>
    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

    function toggleFavorites(userId, radioId) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "/toggle-favorites");
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken); // Set CSRF token in the request header
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    // Check if the response indicates success or failure
                    if (response) {
                        // Update the button text based on the new state
                        //    console.log(response);
                        var buttonText = response['exists'] ? "Remove from Favorites" : "Add to Favorites";
                        document.getElementById("favourites_toggle").innerText = buttonText;
                    } else {
                        console.error('Failed to toggle favorites');
                    }
                } else {
                    console.error("Failed to toggle favorites");
                }
            }
        };
        var data = JSON.stringify({
            user_id: userId,
            radio_id: radioId
        });
        xhr.send(data);
    }
    document.addEventListener("DOMContentLoaded", function() {
        var reportIssueLink = document.getElementById("report_issue_link");
        if (reportIssueLink) {
            reportIssueLink.addEventListener("click", function() {
                reportBrokenStation();
            });
        }
    });

    function reportBrokenStation() {
        // Send AJAX request to report broken station
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "{{ route('report-issue') }}", true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken); // Set CSRF token in the request header
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById('report_issue_link').innerText = '';
                document.getElementById('issue_report').innerText = 'Issue reported successfully';
                // Handle successful response
                console.log("Issue reported successfully");
            } else {
                // Handle error
                console.error("Failed to report issue");
            }
        };
        xhr.send(JSON.stringify({
            radio_list_id: {
                {
                    $station - > id
                }
            }
        }));
    }
</script>
@endsection

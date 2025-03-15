<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="">
    <meta name="description" content="Station Select - Online Radio Directory">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="img/liveradio_profile.png" />
    <title>Station Select | Internet Radio Directory</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dark_theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" />


<style>
         img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }

</style>
    <style>
        .tawk-min-container,
        .font-lato {
            bottom: 10rem !important
        }


        .cursor {
            border: 2px solid rgb(248, 71, 62);
            border-radius: 50%;
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
            pointer-events: none;
            mix-blend-mode: multiply;
            transform: scale(1);
            transition: transform 0.35s ease-out, top 0.1s ease, left 0.1s ease;
            z-index: 100011;
        }

        @supports not (mix-blend-mode: multiply) {
            .cursor {
                opacity: 0.7;
            }
        }

        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .cursor {
                visibility: hidden;
            }
        }

        js

        /* Custom Cursor */
        .custom-cursor {
            position: fixed;
            top: -10px;
            left: -10px;
            /* margin:-10px 40px 0 0 !important; */

            width: 20px;
            height: 20px;
            border: 1px solid rgb(248, 71, 62);
            border-radius: 50%;
            pointer-events: none;
            z-index: 10000;
            transform: translate(-50%, -50%) scale(1);
            /* Center the cursor and allow scaling */
            transition: transform 0.15s ease-out, background-color 0.15s ease-out;
            will-change: transform, background-color;
        }

        /* Active/Clicked State */
        .custom-cursor.active {
            transform: translate(-50%, -50%) scale(2);
            /* Enlarges when clicked */
            background-color: rgba(248, 71, 62, 0.2);
        }

        /* Hide Cursor on Touch Devices */
        @media (hover: none) and (pointer: coarse) {
            .custom-cursor {
                display: none;
            }
        }
    </style>

    <style>
        .utf_category_small_box_part h4,
.new_station_card h4,
.station-card h4 {
    color: black !important;
}
    </style>
</head>


<body>




    <script>
        // Wait for the DOM to fully load
        document.addEventListener('DOMContentLoaded', () => {
            // Create and append the cursor element to the body
            const cursor = document.createElement('div');
            cursor.classList.add('custom-cursor');
            document.body.appendChild(cursor);

            // Track mouse movement and update cursor position
            document.addEventListener('mousemove', (e) => {
                const cursorX = e.clientX;
                const cursorY = e.clientY;

                // Update the position of the cursor
                cursor.style.transform = `translate(${cursorX}px, ${cursorY}px)`;
            });

            // Add a "click" effect by enlarging the cursor
            document.addEventListener('mousedown', () => {
                cursor.classList.add('active');
            });

            document.addEventListener('mouseup', () => {
                cursor.classList.remove('active');
            });
        });
    </script>

    <div id="preloader">
        <div id="status">
            <img src="{{ asset('assets/img/loader.gif') }}" id="preloader_image" alt="Loading...">
        </div>
    </div>



    <style>
        /* Preloader Styles */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            /* Change as needed */
            z-index: 9999;
            /* Ensure it is on top */
            display: flex;
            /* Use flexbox to center */
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */
        }

        #preloader.fade-out {
            opacity: 0;
            transition: opacity 0.5s ease;
            /* Match this with JS timeout */
        }

        #preloader_image {
            width: 150px;
            /* Adjust to your desired size */
            height: auto;
            /* Maintain aspect ratio */
        }
    </style>

    @include('frontend.body.header')


    @yield('custom')



    @include('frontend.body.footer')


    @if (request()->routeIs('all-stations') || request()->routeIs('search'))
        <script>
            document.getElementById("order_by").addEventListener('change', function() {
                var selectedValue = this.value;

                if (selectedValue) {
                    var searchUrl = '{{ route('search') }}' + '?order_by=' + selectedValue;
                    console.log(searchUrl);
                    window.location.href = searchUrl;
                }
            });
        </script>
    @endif

    <script>
        document.getElementById("mobile_menu").addEventListener('click', function(a) {
            a.preventDefault();
            $("ul.menu_top").toggleClass("visible");
        });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5edbb5839e5f694422900678/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>


    <script>
        var typed = new Typed('.typed-words', {
            strings: ["Attractions", " Restaurants", " Hotels"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
        });
    </script>
    <!--End of Tawk.to Script-->

    <script>
        $(window).on('load', function() {
            // Fade out the preloader once the window has completely loaded
            const preloader = $('#preloader');

            preloader.addClass('fade-out');
            setTimeout(() => {
                preloader.hide(); // Hide the preloader after the fade out
            }, 500); // Match the CSS transition duration
        });

        // Custom Cursor
        $(document).ready(function() {
            const cursor = $('.cursor');
            const cursorOutline = $('.cursor-outline');

            $(document).mousemove(function(e) {
                cursor.css({
                    left: e.pageX + 'px',
                    top: e.pageY + 'px'
                });
                cursorOutline.css({
                    left: e.pageX + 'px',
                    top: e.pageY + 'px'
                });
            });

            $(document).mousedown(function() {
                cursor.css('transform', 'scale(0.8)');
                cursorOutline.css('transform', 'scale(1)');
            });

            $(document).mouseup(function() {
                cursor.css('transform', 'scale(1)');
                cursorOutline.css('transform', 'scale(1.2)');
            });
        });
    </script>
    <!-- jQuery from CDN (latest version) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Core Scripts from assets/js/ -->
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

    <!-- Frontend Specific Scripts from assets/frontend/scripts/ -->
    <script src="{{ asset('assets/frontend/scripts/chosen.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/scripts/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/scripts/rangeslider.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/scripts/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/scripts/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/scripts/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/scripts/mmenu.js') }}"></script>
    <script src="{{ asset('assets/frontend/scripts/tooltips.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/scripts/color_switcher.js') }}"></script>
    <script src="{{ asset('assets/frontend/scripts/jquery_custom.js') }}"></script>


</body>


</html>

<?php

use App\Models\Notification;

$notifications = Notification::latest()->take(5)->get();

?>





{{-- <div class="m24_navi_main_wrapper ms_cover">
    <div class="container-fluid">




        <div class="m24_logo_wrapper">
            <div class="ms_logo_div">
                <a href="{{ route('frontend.index') }}">
                    <img src="{{ asset('assets/frontend/img/logo1.png') }}" alt="logo">
                </a>
            </div>

        </div>

        <div class="m24_header_right_Wrapper d-block d-sm-block d-md-block d-lg-block d-xl-block">
            <div class="m24_signin_wrapper">
                <a href="#" data-toggle="modal" data-target="#login_modal">
                    <div class="login_top_wrapper">
                        @guest

                            <a href="{{ route('frontend.login') }}">
                                <div class="login_top_wrapper">
                                    <p>Profile</p>

                                </div>
                            </a>
                        @else
                            <a href="#">
                                <div class="login_top_wrapper">
                                    <form action="{{ route('frontend.logout') }}" method="post">
                                        @csrf
                                        <input type="submit" value="Logout" id="user-logout">
                                    </form>
                                </div>
                            </a>



                        @endguest
                    </div>
                </a>
            </div>

























            <div class="crm_message_dropbox_wrapper">
                <div class="nice-select budge_noti_wrapper" tabindex="0">
                    <span class="current budge_noti" data-count="{{ $notifications->count() }}">
                        <i class="flaticon-bell"></i>
                    </span>


                    <ul class="list pullDown">
                        @if ($notifications->isEmpty())
                            <li><a href="#">No new notifications</a></li>
                        @else
                            <li><a href="#">{{ $notifications->count() }} New notifications</a></li>
                            @foreach ($notifications as $notification)
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="{{ asset('images/notification_image/' . $notification->image) }}"
                                                alt="Notification Image">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>
                                                {{ $notification->title }}
                                                <span>{{ $notification->created_at->format('h:iA') }}</span>
                                            </h4>
                                            <p>{{ $notification->message }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                        <li>
                            <div class="crm_mess_all_main_box_wrapper">
                                <p><a href="#">See All</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>



























        </div>

        <div class="m24_navigation_wrapper">
            <div class="mainmenu d-xl-block d-lg-block ">
                <ul class="main_nav_ul">




                    <li class="{{ request()->routeIs('frontend.index') ? 'active' : '' }}">
                        <a href="{{ route('frontend.index') }}" class="gc_main_navigation">Home</a>
                    </li>
                    <li class="{{ request()->is('all-stations') && !request()->has('top-20') ? 'active' : '' }}">
                        <a href="{{ route('all-stations') }}" class="gc_main_navigation">Stations</a>
                    </li>
                    <li class="{{ request()->routeIs('countries') ? 'active' : '' }}">
                        <a href="{{ route('countries') }}" class="gc_main_navigation">Countries</a>
                    </li>
                    <li class="{{ request()->routeIs('genres') ? 'active' : '' }}">
                        <a href="{{ route('genres') }}" class="gc_main_navigation">Genres</a>
                    </li>
                    <li class="{{ request()->query('top-20') !== null ? 'active' : '' }}">
                        <a href="{{ route('all-stations', ['top-20' => 'top-20']) }}" class="gc_main_navigation">Top
                            20</a>
                    </li>












                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">Profile
                            <i class="flaticon-down-arrow"></i></a>
                        <ul class="navi_2_dropdown">


























                            @guest

                                <li class="parent">
                                    <a href="{{ route('frontend.register') }}"><i
                                            class="fas fa-caret-right"></i>Register</a>
                                </li>
                                <li class="parent">
                                    <a href="{{ route('frontend.login') }}"><i class="fas fa-caret-right"></i>Login</a>
                                </li>
                            @else
                                <li class="{{ request()->routeIs('add-station') ? 'active' : '' }}">
                                    <a href="{{ route('add-station') }}">Submit Station</a>
                                </li>
                                <li class="parent">
                                    <a class="" href="{{ route('my-stations') }}">My Stations</a>
                                </li>
                                <li class="parent">
                                    <a class="" href="{{ route('profile.edit') }}">Profile</a>
                                </li>
                                <li class="parent">
                                    <form action="{{ route('frontend.logout') }}" method="post">
                                        @csrf
                                        <input type="submit" value="Logout" id="user-logout">
                                    </form>
                                </li>


                            @endguest

                        </ul>
                    </li>


                </ul>
            </div>

            <div class="navi_searchbar_wrapper  d-xl-block d-lg-block d-md-block  d-sm-block d-block">
                <i class="flaticon-magnifying-glass"></i>
                <form class="form_filter" name="filter" method="get" action="{{ route('search') }}">

                    <input type="text" id="justAnotherInputBox1" name="text"
                        placeholder="Search for Songs, Artists, Playlists and More.." />
                </form>

            </div>

            <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                <div class="search_bar">
                    
                    <div class="res_search_bar" id="search_button"> 
                        <i class="fa fa-ellipsis-v"></i>

                    </div>

                    <div id="search_open" class="res_search_box">


                        <div class="m24_signin_wrapper responsive_search_toggle">









                            @guest

                                <a href="{{ route('frontend.login') }}">
                                    <div class="login_top_wrapper">
                                        <p>Profile</p>

                                    </div>
                                </a>
                            @else
                                <a href="#">
                                    <div class="login_top_wrapper">
                                        <form action="{{ route('frontend.logout') }}" method="post">
                                            @csrf
                                            <input type="submit" value="Logout" id="user-logout">
                                        </form>
                                    </div>
                                </a>



                            @endguest









































                        </div>

                        <div class="crm_message_dropbox_wrapper responsive_search_toggle">
                            <div class="nice-select budge_noti_wrapper" tabindex="0">
                                <!-- Dynamic Notification Count -->
                                <span class="current budge_noti" data-count="{{ $notifications->count() }}">
                                    <i class="flaticon-bell"></i>
                                </span>
                                <p class="notify_para">notifications</p>

                                <ul class="list">
                                    <!-- Check if there are notifications -->
                                    @if ($notifications->isEmpty())
                                        <li><a href="#">No new notifications</a></li>
                                    @else
                                        <li><a href="#">{{ $notifications->count() }} New notifications</a></li>
                                        @foreach ($notifications as $notification)
                                            <li>
                                                <div class="crm_mess_main_box_wrapper">
                                                    <div class="crm_mess_img_wrapper">
                                                        <!-- Dynamic Image -->
                                                        <img src="{{ asset('images/notification_image/' . $notification->image) }}"
                                                            alt="Notification Image">
                                                    </div>
                                                    <div class="crm_mess_img_cont_wrapper">
                                                        <!-- Dynamic Title and Time -->
                                                        <h4>
                                                            {{ $notification->title }}
                                                            <span>{{ $notification->created_at->format('h:iA') }}</span>
                                                        </h4>
                                                        <p>{{ $notification->message }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif

                                    <!-- "See All" Link -->
                                    <li>
                                        <div class="crm_mess_all_main_box_wrapper">
                                            <p><a href="#">See All</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>  --}}











<style>
/* Sticky Navbar */
.m24_navi_main_wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1000; /* Ensures it stays on top of other elements */
    transition: all 0.5s ease-in-out;
}

/* Add padding to body to prevent coantent from hiding under navbar */
body {
    padding-top: 10vw; /* Adjust according to navbar height */
}

/* Responsive Sticky Navbar */
@media (max-width: 768px) {
    .m24_navi_main_wrapper {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    body {
        padding-top: 80px; /* Adjust for mobile navbar */
    }
}
</style>

<div class="m24_navi_main_wrapper ms_cover">


    <div class="container-fluid">
        <div class="m24_logo_wrapper">
            <div class="ms_logo_div">
                <a href="{{ route('frontend.index') }}">
                    <img src="{{ asset('assets/frontend/img/logo1.png') }}" alt="logo"
                        style="max-width:7rem; height:auto;">
                </a>
            </div>
            <div id="toggle">
                <a href="#"><i class="flaticon-menu-1"></i></a>
            </div>
        </div>

        <div class="m24_header_right_Wrapper d-none d-sm-none d-md-none d-lg-none d-xl-block">
            <div class="m24_signin_wrapper">
                <a href="#" data-toggle="modal" data-target="#login_modal"><img src="{{ asset('assets/images/pf.png')}}"
                        alt="img">

                    <style>
                        /* Custom Dropdown Container */
                        .custom-dropdown {
                            position: relative;
                            display: inline-block;
                        }

                        /* Dropdown Toggle (the visible trigger) */
                        .custom-dropdown-toggle {
                            cursor: pointer;
                            user-select: none;
                        }

                        /* Dropdown Menu (hidden by default) */
                        .custom-dropdown-menu {
                            display: none;
                            position: absolute;
                            top: 4rem;
                            left: -5rem;
                            background-color: #fff;
                            min-width: 220px;
                            border: 1px solid #ddd;
                            border-radius: 4px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                            z-index: 1000;
                            padding: 10px 0;
                        }

                        /* Show the dropdown when active */
                        .custom-dropdown-menu.active {
                            display: block;
                        }

                        /* Dropdown Items */
                        .custom-dropdown-item {
                            display: block;
                            padding: 8px 20px;
                            color: #333;
                            text-decoration: none;
                        }

                        /* Hover state */
                        .custom-dropdown-item:hover {
                            background-color: #f8f9fa;
                        }

                        /* Divider */
                        .custom-dropdown-divider {
                            height: 1px;
                            margin: 5px 0;
                            background-color: #e9ecef;
                        }
                    </style>




                    <div class="custom-dropdown login_top_wrapper">
                        <!-- Dropdown trigger -->
                        <div class="custom-dropdown-toggle">
                            <p class="mb-0">
                                @guest
                                    Login/Register
                                @else
                                    {{ auth()->user()->name }}
                                @endguest
                            </p>
                        </div>
                        <!-- Dropdown menu -->
                        <div class="custom-dropdown-menu">
                            @guest
                                <a href="{{ route('frontend.register') }}" class="custom-dropdown-item">
                                    <i class="fas fa-user-plus"></i> Register
                                </a>
                                <a href="{{ route('frontend.login') }}" class="custom-dropdown-item">
                                    <i class="fas fa-sign-in-alt"></i> Login
                                </a>
                            @else
                                <a href="{{ route('add-station') }}"
                                    class="custom-dropdown-item {{ request()->routeIs('add-station') ? 'active' : '' }}">
                                    <i class="fas fa-plus-circle"></i> Submit Station
                                </a>
                                <a href="{{ route('my-stations') }}" class="custom-dropdown-item">
                                    <i class="fas fa-list"></i> My Stations
                                </a>
                                <a href="{{ route('profile.edit') }}" class="custom-dropdown-item">
                                    <i class="fas fa-user-edit"></i> Profile
                                </a>
                                <div class="custom-dropdown-divider"></div>
                                <form action="{{ route('frontend.logout') }}" method="post" class="px-2 py-2">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-block">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </button>
                                </form>
                            @endguest
                        </div>
                    </div>





                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            // Select the toggle and menu elements
                            var dropdownToggle = document.querySelector('.custom-dropdown-toggle');
                            var dropdownMenu = document.querySelector('.custom-dropdown-menu');

                            // Toggle the menu when clicking the trigger
                            dropdownToggle.addEventListener('click', function(e) {
                                e.stopPropagation(); // Prevent the click from bubbling up
                                dropdownMenu.classList.toggle('active');
                            });

                            // Close the dropdown if clicking outside of it
                            document.addEventListener('click', function(e) {
                                if (!dropdownToggle.contains(e.target)) {
                                    dropdownMenu.classList.remove('active');
                                }
                            });
                        });
                    </script>

                </a>
            </div>





            <div class="crm_message_dropbox_wrapper">
                <div class="nice-select budge_noti_wrapper" tabindex="0">
                    <span class="current budge_noti" data-count="{{ $notifications->count() }}">
                        <i class="flaticon-bell"></i>
                    </span>


                    <ul class="list pullDown">
                        @if ($notifications->isEmpty())
                            <li><a href="#">No new notifications</a></li>
                        @else
                            <li><a href="#">{{ $notifications->count() }} New notifications</a></li>
                            @foreach ($notifications as $notification)
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="{{ asset('images/notification_image/' . $notification->image) }}"
                                                alt="Notification Image">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>
                                                {{ $notification->title }}
                                                <span>{{ $notification->created_at->format('h:iA') }}</span>
                                            </h4>
                                            <p>{{ $notification->message }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                        <li>
                            <div class="crm_mess_all_main_box_wrapper">
                                <p><a href="#">See All</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="m24_navigation_wrapper">
            <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                <ul class="main_nav_ul">

                    <li><a href="{{ route('frontend.index') }}" class="gc_main_navigation">Home</a></li>

                    <li><a href="{{ route('all-stations') }}" class="gc_main_navigation">Stations</a></li>









                    <li class="has-mega gc_main_navigation">
                        <a href="#" class="gc_main_navigation">More <i class="flaticon-down-arrow"></i></a>
                        <ul class="navi_2_dropdown">
                            <li class="{{ request()->routeIs('countries') ? 'active' : '' }}">
                                <a href="{{ route('countries') }}" class="gc_main_navigation">
                                    <i class="fas fa-globe"></i> Countries
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('genres') ? 'active' : '' }}">
                                <a href="{{ route('genres') }}" class="gc_main_navigation">
                                    <i class="fas fa-music"></i> Genres
                                </a>
                            </li>
                            <li class="{{ request()->query('top-20') !== null ? 'active' : '' }}">
                                <a href="{{ route('all-stations', ['top-20' => 'top-20']) }}" class="gc_main_navigation">
                                    <i class="fas fa-star"></i> Top 20
                                </a>
                            </li>
                            @auth
                                <li class="{{ request()->routeIs('add-station') ? 'active' : '' }}">
                                    <a href="{{ route('add-station') }}" class="gc_main_navigation">
                                        <i class="fas fa-plus-circle"></i> Submit Station
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('my-stations') ? 'active' : '' }}">
                                    <a href="{{ route('my-stations') }}" class="gc_main_navigation">
                                        <i class="fas fa-list"></i> My Stations
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('profile.edit') ? 'active' : '' }}">
                                    <a href="{{ route('profile.edit') }}" class="gc_main_navigation">
                                        <i class="fas fa-user-edit"></i> Profile
                                    </a>
                                </li>
                            @endauth
                        </ul>
                    </li>


                </ul>
            </div>
            <!-- mainmenu end -->
            <div class="navi_searchbar_wrapper d-xl-block d-lg-block d-md-block d-sm-block d-block">
                <i class="flaticon-magnifying-glass"></i>
                <form class="form_filter" name="filter" method="get" action="{{ route('search') }}">
                    <input type="text" id="justAnotherInputBox1" name="text" style="width:100%"
                        placeholder="Search for Songs, Artists, Playlists and More.." autocomplete="off" />
                </form>
            </div>
            <div class="d-block d-sm-block d-md-block d-lg-block d-xl-none">
                <div class="search_bar">
                    <div class="res_search_bar" id="search_button"> <i class="fa fa-ellipsis-v"></i>
                    </div>
                    <div id="search_open" class="res_search_box">


                        <div class="m24_signin_wrapper responsive_search_toggle">

                            <a href="#" data-toggle="modal" data-target="#login_modal"><img
                                    src="{{ asset('assets/images/pf.png')}}" alt="img">
                                <div class="login_top_wrapper">
                                    <p class="mb-0">
                                        @guest
                                            Login/Register
                                        @else
                                            {{ auth()->user()->name }}
                                        @endguest
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="crm_message_dropbox_wrapper responsive_search_toggle">
                            <div class="nice-select budge_noti_wrapper" tabindex="0">
                                <!-- Dynamic Notification Count -->
                                <span class="current budge_noti" data-count="{{ $notifications->count() }}">
                                    <i class="flaticon-bell"></i>
                                </span>
                                <p class="notify_para">notifications</p>

                                <ul class="list">
                                    <!-- Check if there are notifications -->
                                    @if ($notifications->isEmpty())
                                        <li><a href="#">No new notifications</a></li>
                                    @else
                                        <li><a href="#">{{ $notifications->count() }} New notifications</a></li>
                                        @foreach ($notifications as $notification)
                                            <li>
                                                <div class="crm_mess_main_box_wrapper">
                                                    <div class="crm_mess_img_wrapper">
                                                        <!-- Dynamic Image -->
                                                        <img src="{{ asset('images/notification_image/' . $notification->image) }}"
                                                            alt="Notification Image">
                                                    </div>
                                                    <div class="crm_mess_img_cont_wrapper">
                                                        <!-- Dynamic Title and Time -->
                                                        <h4>
                                                            {{ $notification->title }}
                                                            <span>{{ $notification->created_at->format('h:iA') }}</span>
                                                        </h4>
                                                        <p>{{ $notification->message }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif

                                    <!-- "See All" Link -->
                                    <li>
                                        <div class="crm_mess_all_main_box_wrapper">
                                            <p><a href="#">See All</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m24_navi_langauage_box">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="lang_list_wrapper d-none d-sm-none d-md-none d-lg-none d-xl-block">
                    <a href="#" data-toggle="modal" data-target="#myModal">Mode <i
                            class="fas fa-adjust"></i></a>
                </div>
            </div>
        </div>
    </div>








    <style>
        /* Sidebar Base Styling */
#sidebar {
   
  
    transition: 0.3s;
}

#sidebar.active {
    left: 0;
}

#sidebar a {
    color: #fff;
    text-decoration: none;
    display: block;
    padding: 10px 15px;
    transition: 0.3s;
}



/* Submenu */
#sidebar .has-sub ul {
    display: none;
    padding-left: 15px;
}

#sidebar .has-sub a:hover + ul,
#sidebar .has-sub ul:hover {
    display: block;
}

/* Authentication Buttons */
.auth_btn_wrapper {
    text-align: center;
    margin-top: 20px;
}

.auth_btn {
    display: inline-block;
    background: #e63946;
    color: white;
    padding: 10px 20px;
    border-radius: 4px;
    transition: 0.3s;
    width: 80%;
    text-align: center;
    font-weight: bold;
    cursor: pointer;
}

.auth_btn:hover {
    background: #d62828;
}
    </style>









<div id="sidebar" class="bounce-to-right">
    <div id="toggle_close">×</div>
    <div id="cssmenu">
        <a href="{{ route('frontend.index') }}">
            <img src="{{ asset('assets/frontend/img/logo1.png') }}" alt="logo">
        </a>
        <ul class="sidebb">
            <li class="{{ request()->routeIs('frontend.index') ? 'active' : '' }}">
                <a href="{{ route('frontend.index') }}"><i class="flaticon-home"></i> Home</a>
            </li>
            @auth
            <li class="{{ request()->routeIs('add-station') ? 'active' : '' }}">
                <a href="{{ route('add-station') }}">
                    <i class="fas fa-plus-circle"></i> Submit Station
                </a>
            </li>
            <li class="{{ request()->routeIs('my-stations') ? 'active' : '' }}">
                <a href="{{ route('my-stations') }}">
                    <i class="fas fa-list"></i> My Stations
                </a>
            </li>
            <li class="{{ request()->routeIs('profile.edit') ? 'active' : '' }}">
                <a href="{{ route('profile.edit') }}">
                    <i class="fas fa-user-edit"></i> Profile
                </a>
            </li>
        @endauth
            <li class="{{ request()->routeIs('all-stations') ? 'active' : '' }}">
                <a href="{{ route('all-stations') }}"><i class="flaticon-radio"></i> Stations</a>
            </li>
            <li class="{{ request()->routeIs('countries') ? 'active' : '' }}">
                <a href="{{ route('countries') }}"><i class="fas fa-globe"></i> Countries</a>
            </li>
            <li class="{{ request()->routeIs('genres') ? 'active' : '' }}">
                <a href="{{ route('genres') }}"><i class="fas fa-music"></i> Genres</a>
            </li>
            <li class="{{ request()->query('top-20') !== null ? 'active' : '' }}">
                <a href="{{ route('all-stations', ['top-20' => 'top-20']) }}"><i class="fas fa-star"></i> Top 20</a>
            </li>
    
        </ul>

        <!-- Authentication Section -->
        <div class="auth_btn_wrapper">
            @guest
                <a href="{{ route('frontend.login') }}" class="auth_btn">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
            @else
                <form action="{{ route('frontend.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="auth_btn">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            @endguest
        </div>
    </div>
</div>
</div>










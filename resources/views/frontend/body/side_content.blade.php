 <!-- Sidebar Column -->
 
  <style>
 @media (max-width: 768px) {
    #sidesp {
        display: none;
    }
}
</style>
 <div class="col-lg-4 col-md-4" id="sidesp">
    <div class="sidebar">
        <!-- Stations by Country -->
        <div class="utf_box_widget margin-top-35">
            <h3><i class="sl sl-icon-folder-alt"></i> Stations by Country</h3>
            <ul class="utf_listing_detail_sidebar">
                @php
                    $countries = showCountries();
                    $countriesCount = count($countries);
                    $totalCountriesToDisplay = 10; // Limit to 10 countries
                @endphp

                @for ($i = 0; $i < $totalCountriesToDisplay && $i < $countriesCount; $i++)
                    <li>
                        <i class="fa fa-angle-double-right"></i>
                        <a href="{{ route('all-stations', ['country' => $countries[$i]->id]) }}">
                            {{ $countries[$i]->name }}
                        </a>
                    </li>
                @endfor
            </ul>
            <div class="link">
                <a href="{{ route('countries') }}">All countries &raquo;</a>
            </div>
        </div>

        <!-- Stations by Genre -->
        <div class="utf_box_widget margin-top-35">
            <h3><i class="sl sl-icon-folder-alt"></i> Stations by Genre</h3>
            <ul class="utf_listing_detail_sidebar">
                @php
                    $genres = showGenres();
                    $genresCount = count($genres);
                    $totalGenresToDisplay = 10; // Limit to 10 genres
                @endphp

                @for ($i = 0; $i < $totalGenresToDisplay && $i < $genresCount; $i++)
                    <li>
                        <i class="fa fa-angle-double-right"></i>
                        <a href="{{ route('all-stations', ['genre' => $genres[$i]->id]) }}">
                            {{ $genres[$i]->name }}
                        </a>
                    </li>
                @endfor
            </ul>
            <div class="link">
                <a href="{{ route('genres') }}">All genres &raquo;</a>
            </div>
        </div>

        <!-- Advertise Your Business -->
        <div class="utf_box_widget margin-top-35">
            <h3><i class="sl sl-icon-book-open"></i> Advertise Your Business</h3>
            <div class="list_categories">
                <p><a href="mailto:onlineaudienceltd@gmail.com">
                    <img src="https://stationselect.com/public/images/ads.png" alt="Advertise" style="width: 100%; height: auto;">
                </a></p>
            </div>
        </div>
        
        <!-- User Menu -->
        <!--<div class="utf_box_widget margin-top-35">-->
        <!--    <h3><i class="sl sl-icon-user"></i> User Menu</h3>-->
        <!--    <ul class="utf_listing_detail_sidebar">-->
        <!--        <li class="{{ request()->routeIs('add-station') ? 'active' : '' }}">-->
        <!--            <a href="{{ route('add-station') }}">Submit Station</a>-->
        <!--        </li>-->
        <!--        @guest-->
        <!--            <li class="{{ request()->routeIs('frontend.register') ? 'active' : '' }}">-->
        <!--                <a href="{{ route('frontend.register') }}">Register</a>-->
        <!--            </li>-->
        <!--            <li class="{{ request()->routeIs('frontend.login') ? 'active' : '' }}">-->
        <!--                <a href="{{ route('frontend.login') }}">Login</a>-->
        <!--            </li>-->
        <!--        @else-->
        <!--            <li class="{{ request()->routeIs('my-stations') ? 'active' : '' }}">-->
        <!--                <a href="{{ route('my-stations') }}">My Stations</a>-->
        <!--            </li>-->
        <!--            <li class="{{ request()->routeIs('profile.edit') ? 'active' : '' }}">-->
        <!--                <a href="{{ route('profile.edit') }}">Profile</a>-->
        <!--            </li>-->
        <!--            <li>-->
        <!--                <form action="{{ route('frontend.logout') }}" method="post">-->
        <!--                    @csrf-->
        <!--                    <input type="submit" value="Logout" id="user-logout">-->
        <!--                </form>-->
        <!--            </li>-->
        <!--        @endguest-->
        <!--    </ul>-->
        <!--</div>-->
    </div>
</div>
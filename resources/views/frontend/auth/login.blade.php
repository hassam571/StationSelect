<!--  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/img/favicon.ico') }}" />-->

<!--  <script src="{{ asset('assets/frontend/js/custom.js') }}" type="890d832059cdd63efc2bb9e7-text/javascript"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"-->
<!--        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="-->
<!--        crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/jplayer/jquery.jplayer.min.js"-->
<!--        integrity="sha512-g0etrk7svX8WYBp+ZDIqeenmkxQSXjRDTr08ie37rVFc99iXFGxmD0/SCt3kZ6sDNmr8sR0ISHkSAc/M8rQBqg=="-->
<!--        crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->

  <!-- Style CSS -->
<!--  <link rel="stylesheet" href="{{ asset('assets/frontend/css/stylesheet.css') }}">-->
<!--  <link rel="stylesheet" href="{{ asset('assets/frontend/css/mmenu.css') }}">-->
<!--  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" >-->
<!--  <link rel="stylesheet" href="{{ asset('assets/frontend/css/sstyle.css') }}" id="colors">-->
  <!-- Google Font -->
<!--  <link-->
<!--    href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese"-->
<!--    rel="stylesheet">-->
<!--  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"-->
<!--    type="text/css">-->


      <!-- Scripts -->
  <!--<script src="{{ asset('assets/frontend/scripts/jquery-3.4.1.min.js') }}"></script>-->
<!--  <script src="{{ asset('assets/frontend/scripts/chosen.min.js') }}"></script>-->
<!--  <script src="{{ asset('assets/frontend/scripts/slick.min.js') }}"></script>-->
<!--  <script src="{{ asset('assets/frontend/scripts/rangeslider.min.js') }}"></script>-->
<!--  <script src="{{ asset('assets/frontend/scripts/magnific-popup.min.js') }}"></script>-->
<!--  <script src="{{ asset('assets/frontend/scripts/jquery-ui.min.js') }}"></script>-->
<!--  <script src="{{ asset('assets/frontend/scripts/bootstrap-select.min.js') }}"></script>-->
<!--  <script src="{{ asset('assets/frontend/scripts/mmenu.js') }}"></script>-->
<!--  <script src="{{ asset('assets/frontend/scripts/tooltips.min.js') }}"></script>-->
<!--  <script src="{{ asset('assets/frontend/scripts/color_switcher.js') }}"></script>-->
<!--  <script src="{{ asset('assets/frontend/scripts/jquery_custom.js') }}"></script>-->
  <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->





<!--<div class="container">-->

<!--    <div class="container_content">-->
<!--        <div class="container_center">-->

<!--            <main class="content_main">-->
<!--                <div class="view">-->
<!--                    <h1 class="view_header heading_large">Login</h1>-->
<!--                </div>-->
<!--                <section class="view">-->
<!--                    <form action="{{ route('frontend.login-submit') }}" method="post">-->
<!--                        @csrf-->
<!--                        <div class="form_group">-->
<!--                            <label for="email" class="label">Email *</label>-->
<!--                            <input type="text" id="email" name="email" maxlength="100" value class="textbox"-->
<!--                                style="width: 500px" />-->
<!--                        </div>-->
<!--                        <div class="form_group">-->
<!--                            <label for="password" class="label">Password *</label>-->
<!--                            <input type="password" id="password" name="password" maxlength="100" value class="textbox"-->
<!--                                style="width: 500px" />-->
<!--                        </div>-->

<!--                        <div class="form_group">-->
<!--                            <button type="submit" class="button button_regular">-->
<!--                                Submit-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </section>-->
<!--            </main>-->
<!--            <div class="clear"></div>-->
<!--        </div>-->
<!--    </div>-->

<!--    </div>-->





























































<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Erratum – Multi purpose error page template for Service, corporate, agency, Consulting, startup.">
    <meta name="keywords" content="Error page 404, page not found design, wrong url">
    <meta name="author" content="Ashishmaraviya">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/img/favicon.ico') }}" />
    <title>Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/new/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/new/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="assets/new/css/login.css">


    <style>/* Styles for the image container */
.imgcontainer {
    text-align: center; /* Center align the logo */
    margin-bottom: 20px; /* Add spacing below the logo */
}

/* Styles for the avatar (logo) */
.avatar {
    width: 100%; /* Make the image take up the full width of its container */
    max-width: 200px; /* Set a maximum width */
    height: auto; /* Ensure the height is proportional */
    margin: 0 auto; /* Center the image horizontally */
}

/* Media Queries for responsiveness */
@media (max-width: 768px) {
    .avatar {
        max-width: 150px; /* Reduce the max width on smaller screens */
    }
}

@media (max-width: 480px) {
    .avatar {
        max-width: 120px; /* Further reduce the logo size on very small screens */
    }
}
</style>


</head>

<body>

    <!-- 01 Preloader -->
    <div class="loader-wrapper" id="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- Preloader end -->
    <!-- 02 Main page -->
    <section class="page-section login-page">
        <div class="full-width-screen">
            <div class="container-fluid p-0">
                <div class="particles-bg" id="particles-js">
                    <div class="content-detail">
                        <!-- Login form -->
                     <form class="login-form" action="{{ route('frontend.login-submit') }}" method="post">
    @csrf

    <div class="imgcontainer">
        <img src="assets/frontend/img/logo1.png" alt="Avatar" class="avatar">
    </div>
    <div class="input-control">
        <input type="text" placeholder="Enter Email" name="email" required>
        <span class="password-field-show">
            <input type="password" placeholder="Enter Password" name="password"
                class="password-field" value="" required>
            <span data-toggle=".password-field"
                class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </span>
        <label class="label-container">Remember me
            <input type="checkbox" name="remember">
            <span class="checkmark"></span>
        </label>
        <span class="psw"><a href="{{route('frontend.forgetPassword')}}" class="forgot-btn">Forgot password?</a></span>
        <div class="login-btns">
            <button type="submit">Login</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest jquery-->
    <script src="assets/new/js/jquery-3.5.1.min.js"></script>
    <!-- theme particles script -->
    <script src="assets/new/js/particles.min.js"></script>
    <script src="assets/new/js/app.js"></script>
    <!-- Theme js-->
    <script src="assets/new/js/script.js"></script>
</body>

</html>

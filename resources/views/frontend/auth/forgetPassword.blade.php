<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description"
        content="Erratum – Multi purpose error page template for Service, corporate, agency, Consulting, startup.">
    <meta name="keywords" content="Error page 404, page not found design, wrong url">
    <meta name="author" content="Ashishmaraviya"> -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/img/favicon.ico') }}" />
    <title>Register</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/new/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/new/css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/new/css/login.css') }}">


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

    <?php
        $styleMessage = isset($message) ? 'none' : 'block';
        $check = $styleMessage == 'none' ? 'block' : 'none';
    ?>
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
                     <form class="login-form" action="{{ route('frontend.forgetPasswordFunction') }}" method="post">
    @csrf

    <div class="imgcontainer">
        <img src="{{asset('assets/frontend/img/logo1.png')}}" alt="Avatar" class="avatar">
    </div>
    <div class="input-control">
        <span style="display:<?php echo $styleMessage ?>">
           Forgotten your password? Enter your email address below to begin the reset process.
        </span>
        @if(isset($message))
            <span style="display:<?php echo $check ?>; color:red;">
                {{$message}}
            </span>
        @endif
        <input type="text" placeholder="Enter Email" name="email" required>
        <span class="psw"><a href="{{route('frontend.login')}}" class="forgot-btn">Return to Login?</a></span>
        <div class="login-btns">
            <button type="submit">Submit</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest jquery-->
    <script src="{{asset('assets/new/js/jquery-3.5.1.min.js') }}"></script>
    <!-- theme particles script -->
    <script src="{{asset('assets/new/js/particles.min.js') }}"></script>
    <script src="{{asset('assets/new/js/app.js') }}"></script>
    <!-- Theme js-->
    <script src="{{asset('assets/new/js/script.js') }}"></script>
</body>

</html>

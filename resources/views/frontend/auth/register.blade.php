
    <!--<div class="container_content">-->
    <!--    <div class="container_center">-->
    <!--        <div class="breadcrumbs_outer">-->
    <!--            <nav class="breadcrumbs">-->
    <!--                <a href="{{ route('frontend.index') }}">Home</a>&ensp;<img src="{{ asset("assets/frontend/img/bullet1.png") }}" alt />&ensp;Register-->
    <!--            </nav>-->
    <!--            <div class="breadcrumbs_spacer"></div>-->
    <!--        </div>-->
    <!--        <main class="content_main">-->
    <!--            <div class="view">-->
    <!--                <h1 class="view_header heading_large">Register</h1>-->
    <!--                <p>-->
    <!--                    Registration is only needed if you want to submit new station.-->
    <!--                </p>-->
    <!--            </div>-->
    <!--            <div class="view">-->
    <!--                <form action="{{ route('frontend.register') }}" method="post">-->
    <!--                    @csrf-->
    <!--                    <div class="form_group">-->
    <!--                        <label for="name" class="label">Name *</label>-->
    <!--                        <input type="name" id="name" name="name" maxlength="100" value="{{ old('name') }}" class="textbox" style="width: 500px" />-->
    <!--                    </div>-->
    <!--                    <div class="form_group">-->
    <!--                        <label for="email" class="label">Email *</label>-->
    <!--                        <input type="email" id="email" name="email" maxlength="100" value="{{ old('email') }}" class="textbox" style="width: 500px" />-->
    <!--                    </div>-->

    <!--                    <div class="form_group">-->
    <!--                        <label for="password" class="label">Password *</label>-->
    <!--                        <input type="password" id="password" name="password" maxlength="100" class="textbox" style="width: 500px" />-->
    <!--                    </div>-->
    <!--                    <div class="form_group">-->
    <!--                        <label for="password_confirmation" class="label">Confirm Password *</label>-->
    <!--                        <input type="password" id="password_confirmation" name="password_confirmation" maxlength="100" class="textbox" style="width: 500px" />-->
    <!--                    </div>-->
    <!--                    <div class="form_group">-->
    <!--                        <button type="submit" class="button button_regular">Submit</button>-->
    <!--                    </div>-->
    <!--                </form>-->

    <!--            </div>-->
    <!--        </main>-->
    <!--        <div class="clear"></div>-->
    <!--    </div>-->
    <!--</div>-->
























































































<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Erratum – Multi purpose error page template for Service, corporate, agency, Consulting, startup.">
    <meta name="keywords" content="Error page 404, page not found design, wrong url">
    <meta name="author" content="Ashishmaraviya">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/img/favicon.ico') }}" />
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/new/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/new/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="assets/new/css/login.css">

    <style>
        /* Styles for the image container */
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
                        <!-- Register form -->
                        <form class="signup-form" action="{{ route('frontend.register') }}" method="post">
                            @csrf
                            <div class="imgcontainer">
                                <img src="{{ asset('assets/frontend/img/logo1.png') }}" alt="Avatar" class="avatar">
                            </div>

                            <div class="input-control">
                                <div class="row p-l-5 p-r-5">
                                    <!-- Name input -->
                                    <div class="col-md-6 p-l-10 p-r-10">
                                        <input type="text" placeholder="Enter Radio Name" id="name" name="name" maxlength="100" value="{{ old('name') }}" required>
                                    </div>

                                    <!-- Email input -->
                                    <div class="col-md-6 p-l-10 p-r-10">
                                        <input type="email" placeholder="Enter Email" id="email" name="email" maxlength="100" value="{{ old('email') }}" required>
                                    </div>

                                    <!-- Password input -->
                                    <div class="col-md-6 p-l-10 p-r-10">
                                        <input type="password" placeholder="Enter Password" id="password" name="password" maxlength="100" class="input-checkmark" required>
                                    </div>

                                    <!-- Password confirmation input -->
                                    <div class="col-md-6 p-l-10 p-r-10">
                                        <input type="password" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" maxlength="100" class="input-checkmark" required>
                                    </div>
                                </div>

                                <!-- Privacy policy checkbox -->
                                <label class="label-container">I agree with <a href="#">privacy policy</a>
                                    <input type="checkbox" required>
                                    <span class="checkmark"></span>
                                </label>

                                <!-- Submit button -->
                                <div class="login-btns">
                                    <button type="submit">Sign up</button>
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

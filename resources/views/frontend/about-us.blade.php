@extends('frontend.master')
@section('custom')

@include('frontend.body.banner')


<style>
    /* Card Hover Effect */
.card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    transition: all 0.3s ease;
}

/* About Us Title Styling */
h1.text-uppercase.fw-bold {
    letter-spacing: 1px;
}

/* Subtle Divider */
hr {
    border-top: 2px dashed #ddd;
    margin: 1rem 0;
}
</style>
<div class="container_content py-4">
    <div class="container_center">
        <div class="breadcrumbs_outer mb-3">
            <nav class="breadcrumbs">
                <a href="{{ route('frontend.index') }}">Home</a>
                &ensp;<img src="{{ asset('assets/frontend/img/bullet1.png') }}" alt="bullet" />&ensp;About Us
            </nav>
            <div class="breadcrumbs_spacer"></div>
        </div>

        <main class="content_main">
            <div class="container">
                <!-- Card or Panel for About Content -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4 p-md-5">
                        <!-- Header/Title -->
                        <h1 class="mb-4 text-center text-uppercase fw-bold" style="color: #f8473e;">
                            <i class="fas fa-info-circle"></i> About Us
                        </h1>

                        <!-- Intro / Subtitle -->
                        <p class="text-center text-muted mb-4" style="max-width: 600px; margin: 0 auto;">
                            Welcome to Station Select – your go-to platform for discovering a world of internet radio stations!
                        </p>
                        <hr />

                        <!-- Main Content -->
                        <div class="px-2 px-md-3">
                            <p><strong>Welcome to Station Select!</strong></p>
                            <p>
                                At Station Select, we're passionate about connecting users with a diverse array of internet 
                                radio stations from around the world. Our platform serves as a comprehensive directory 
                                where radio stations can submit their channels, allowing listeners to tune in, favorite 
                                their top picks, and engage with fellow music enthusiasts by leaving comments and feedback.
                            </p>

                            <p><strong>Why Us?</strong></p>
                            <p>
                                Our mission is to create a vibrant community where music lovers can discover new stations, 
                                explore different genres, and share their love for music with others. Whether you're into jazz, 
                                rock, pop, classical, or any other genre imaginable, Station Select is your go-to destination 
                                for finding quality internet radio content tailored to your preferences.
                            </p>

                            <p>
                                Join us in celebrating the global diversity of music and radio broadcasting. Explore, 
                                discover, and connect with Station Select today!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include('frontend.body.side_content')
        <div class="clear"></div>
    </div>
</div>

@endsection
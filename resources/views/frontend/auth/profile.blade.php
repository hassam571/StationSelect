@extends('frontend.master')
@section('custom')
    @include('frontend.body.banner')
    <div class="container_content">
        <div class="container_center">
            <div class="breadcrumbs_outer">
                <nav class="breadcrumbs">
                    <a href="/">Home</a>&ensp;<img src="/img/bullet1.png" alt="">&ensp;Profile
                </nav>
                <div class="breadcrumbs_spacer"></div>
            </div>
            <main class="content_main">
                <div class="view">
                    <h1 class="view_header heading_large">Profile</h1>
                </div>
                <form class="form" action="{{ route('profile.update') }}" method="post">
                    @csrf
                    <br>
                    <div class="form_group">
                        <label for="name" class="label">Name</label>
                        <input type="text" id="name" name="name" maxlength="100" value="{{ $user->name }}" class="textbox" style="width: 500px;">
                    </div>
                    <div class="form_group">
                        <label for="email" class="label">Email</label>
                        <input type="text" id="email" name="email" maxlength="100" value="{{ $user->email }}" class="textbox" style="width: 500px;">
                    </div>
                    <div class="form_group">
                        <input type="submit" value="Change Details">
                    </div>
                    <div class="form_group">
                        <a href="{{ route('profile.password') }}">Change password</a>
                    </div>
                </form>


            </main>
            @include('frontend.body.side_content')
            <div class="clear"></div>
        </div>
    </div>
@endsection

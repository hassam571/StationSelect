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
                <form class="form" action="{{ route('profile.change-password') }}" method="post">
                    @csrf
                    <br>
                    <div class="form_group">
                        <label for="password" class="label">New Password</label>
                        <input type="password" id="password" name="password" maxlength="100" class="textbox" style="width: 500px;">
                    </div>
                    <div class="form_group">
                        <label for="password_confirmation" class="label">Confirm New Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" maxlength="100" class="textbox" style="width: 500px;">
                    </div>
                    <div class="form_group">
                        <input type="submit" value="Change Password">
                    </div>
                </form>



            </main>
            @include('frontend.body.side_content')
            <div class="clear"></div>
        </div>
    </div>
@endsection

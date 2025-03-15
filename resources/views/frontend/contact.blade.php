@extends('frontend.master')

@section('custom')
    <div class="container_content">
        <div class="container_center">
            <div class="breadcrumbs_outer">
                <nav class="breadcrumbs">
                    <a href="{{ route('frontend.index') }}">Home</a>&ensp;<img src="{{ asset("assets/frontend/img/bullet1.png") }}" alt />&ensp;Contact Us
                </nav>
                <div class="breadcrumbs_spacer"></div>
            </div>
            <main class="content_main">
                <div class="view">
                    <h1 class="view_header heading_large">Contact Us</h1>
                    <p>
                        <img alt src="https://th.bing.com/th/id/R.a420cfd195e5e7d29288e2672c01536a?rik=MOmvcLbDUUEoOg&pid=ImgRaw&r=0"
                            style="
                width: 100%;
                height: 100%;
                border-width: 0px;
                border-style: solid;
              " />
                    </p>
                    <table border="0" cellpadding="1" cellspacing="1" height="210" width="524">
                        <tbody>
                            <tr>
                                <td>
                                    <p><strong>Station Select</strong></p>
                                    <p>Online Audience Developments,</p>
                                    <p>1 Mayfair Place,</p>
                                    <p>London WC1,</p>
                                    <p>United Kingdom</p>
                                </td>
                                <td>
                                    <p>Help: Use Chat Icon</p>
                                    <p>
                                        Email:
                                        info@stationselect.com
                                    </p>
                                    <p>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;♫&nbsp; &nbsp; &nbsp;
                                        ♫&nbsp; &nbsp; &nbsp; ♫
                                    </p>
                                    <p>In order to update a stream URL Contact us,</p>
                                    <p>
                                        To log in to <a href="{{ route('frontend.login') }}">your account</a>.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </main>
            @include('frontend.body.side_content')
            <div class="clear"></div>
        </div>
    </div>
@endsection

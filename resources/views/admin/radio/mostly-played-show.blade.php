@extends('admin.layouts.app')

@section('header', $radio->exists ? 'Detail Radio' : 'Detail Radio')

@section('panel-color', 'primary')

@section('content')
<div class="content">
        <div class="row">
            <div class="content-top-button mb-2">
                <a href="{{ route('admin.mostly-played.index') }}" class='pull-right btn btn-success btn-sm'>Back</a>
            </div>
        </div>
    @include('flash::message')
	<div class="form-group">
		<div class="col-sm-5">
			<strong>Country:</strong> {{ $radio->country ? $radio->country->name : "" }}
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-5">
			<strong>Genres:</strong> {{ $radio->genres ? $radio->genres->name : "" }}
		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-5">
			<strong>Name:</strong> {{ $radio->name ? $radio->name : "" }}
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-5">
			<strong>Streaming Link:</strong> {{ $radio->streaming_link ? $radio->streaming_link : "" }}
		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-5">
			<strong>Description:</strong>
			<p>
				{{ $radio->description ? $radio->description : "" }}
			</p>
		</div>
	</div>

    <div class="form-group">
		<div class="col-sm-5">
			<strong>Image:</strong>
		</div>
		<div class="col-sm-5">
			@if($radio->exists)
				<div class="">
                    <img src="{{ asset( 'images/logos/'. $radio->staion_logo) }}" width="100" height="100" class="img-responsive">
				</div>
			@endif
		</div>
	</div>
@stop


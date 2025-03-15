@extends('admin.layouts.app')

@section('header', $category->exists ? 'Edit Category' : 'New Category')

@section('panel-color', 'primary')

@section('content')
	<div class="content">
        <div class="row">
            <div class="content-top-button mb-2">
                <a href="{{ route('admin.category.index') }}" class='pull-right btn btn-success btn-sm'>Back</a>
            </div>
        </div>
		@include('flash::message')
		@if($category->exists)
			{{Form::model($category, [
				'route' => ['admin.category-update', $category],
				'method' => 'POST',
				'class' => 'form-horizontal',
				'enctype'=>'multipart/form-data'
				])
			}}
		@else
			{{ Form::open([
				'url' => route('admin.category.store') ,
				'method' => 'POST',
				'class' => 'form-horizontal',
				'enctype'=>'multipart/form-data'
				])
			}}
		@endif



		<div class="form-group">
			{{ Form::label('name', 'Name', ['class' => 'control-label col-sm-3']) }}
			<div class="col-sm-5">
				{{ Form::Text('name', null , ['class'=>'form-control']) }}
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-5">
				{{ Form::submit($category->exists ? 'Edit' : 'Create', ['class'=>'btn btn-primary']) }}
			</div>
		</div>

		{{ Form::close() }}
	</div>
@stop


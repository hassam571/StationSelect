@extends('admin.layouts.app')

@section('header', $subcategory->exists ? 'Edit Sub Category' : 'New Sub Category')

@section('panel-color', 'primary')

@section('content')
	<div class="content">
        <div class="row">
            <div class="content-top-button mb-2">
                <a href="{{ route('admin.subcategory.index') }}" class='pull-right btn btn-success btn-sm'>Back</a>
            </div>
        </div>
		@include('flash::message')
		@if($subcategory->exists)
			{{Form::model($subcategory, [
				'route' => ['admin.subcategory-update', $subcategory],
				'method' => 'POST',
				'class' => 'form-horizontal',
				'enctype'=>'multipart/form-data'
				])
			}}
		@else
			{{ Form::open([
				'url' => route('admin.subcategory.store') ,
				'method' => 'POST',
				'class' => 'form-horizontal',
				'enctype'=>'multipart/form-data'
				])
			}}
		@endif



		<div class="form-group">
            {{ Form::label('name', 'Name', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                {{ Form::text('name', null , ['class'=>'form-control']) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('category_id', 'Category', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Select a category']) }}
            </div>
        </div>



		<div class="form-group">
			<div class="col-sm-5">
				{{ Form::submit($subcategory->exists ? 'Edit' : 'Create', ['class'=>'btn btn-primary']) }}
			</div>
		</div>

		{{ Form::close() }}
	</div>
@stop


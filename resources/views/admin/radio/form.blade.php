@extends('admin.layouts.app')

@section('header', $radio->exists ? 'Edit Radio' : 'New Radio')

@section('panel-color', 'primary')

@section('content')
    <div class="content">
        <div class="row">
            <div class="content-top-button mb-2">
                <a href="{{ route('admin.radio.index') }}" class='pull-right btn btn-success btn-sm'>Back</a>
            </div>
        </div>
        @include('flash::message')
        @if ($radio->exists)
            {{ Form::model($radio, [
                'route' => ['admin.radio-update', $radio],
                'method' => 'POST',
                'class' => 'form-horizontal',
                'enctype' => 'multipart/form-data',
            ]) }}
        @else
            {{ Form::open([
                'url' => route('admin.radio.store'),
                'method' => 'POST',
                'class' => 'form-horizontal',
                'enctype' => 'multipart/form-data',
            ]) }}
        @endif

        {{-- <div class="form-group">
        {{ Form::label('language_id', 'Language', ['class' => 'control-label col-sm-3']) }}
        <div class="col-sm-5">
            {{ Form::select('language_id', $languageList, null, ['class' => 'form-control']) }}
        </div>
    </div> --}}
        <div class="form-group">
            {{ Form::label('name', 'Name', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
        </div>



        {{-- {{ dd($CategoryList) }} --}}

        <div class="form-group">
            <label for="category" class="control-label col-sm-3">Category</label>
            <div class="col-sm-5">
                <select name="category_id" id="category" class="form-control">
                    <option value="">Select Category</option>
                    @foreach ($CategoryList as $cat)
                        @if ($radio->exists)
                            <option value="{{ $cat->id }}" {{ $cat->id == $radio->category_id ? 'selected' : '' }}>
                                {{ $cat->name }}</option>
                        @else
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="sub_category" class="control-label col-sm-3">Sub Category</label>
            <div class="col-sm-5">
                <select name="sub_category_id" id="sub_category" class="form-control">
                    <option value="">Select Subcategory</option>


                    @if ($radio->exists)
                        @php
                            $sub_cat = App\Models\SubCategory::all();
                        @endphp
                        @foreach ($sub_cat as $sub)
                            <option value="{{ $sub->id }}"
                                {{ $sub->id == $radio->sub_category_id ? 'selected' : '' }}>{{ $sub->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>



        <div class="form-group">
            {{ Form::label('station_website', 'Station Website', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                {{ Form::text('station_website', null, ['id' => 'station_website', 'class' => 'form-control', 'size' => '40', 'maxlength' => '100', 'style' => 'width: 100%;']) }}
            </div>

        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4]) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('country_id', 'Country', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                {{ Form::select('country_id', ['' => 'Select Country'] + $countryList->toArray(), null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('genres_id', 'Genres', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                {{ Form::select('genres_id', ['' => 'Select Genre'] + $genresList->toArray(), null, ['class' => 'form-control']) }}
            </div>
        </div>



        <div class="form-group">
            {{ Form::label('streaming_link', 'Streaming Link', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                {{ Form::text('streaming_link', null, ['class' => 'form-control']) }}
            </div>
        </div>



        <div class="form-group">
            {{ Form::label('image', 'Image', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                @if ($radio->exists)
                    <div class="">
                        <img src="{{ asset('images/logos/' . $radio->staion_logo) }}" width="100px" height="100px"
                            class="img-responsive">
                    </div>
                    <div class="help-block">
                        Station Logo Currently
                    </div>
                @endif
                {{ Form::file('image', ['class' => 'form-control', 'accept' => 'image/x-png,image/jpeg']) }}
                <span class="help-block mb-3">
                    <strong>Min:50x50, Max:500x500, Mime:jpg/png</strong>
                </span>
            </div>
        </div>


        <div class="form-group">
            {{ Form::label('banner_image', 'Banner Image', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                @if ($radio->exists)
                    <div class="">
                        <img src="{{ asset('images/banner_images/' . $radio->staion_banner) }}" width="100%"
                            height="100%" class="img-responsive">
                    </div>
                    <div class="help-block mb-3">
                        Station Banner Currently
                    </div>
                @endif
                {{ Form::file('banner_image', ['class' => 'form-control', 'accept' => 'image/x-png,image/jpeg']) }}
            </div>
        </div>



        <div class="form-group">
            {{ Form::label('fb_link', 'Facebook Link (optional)', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                {{ Form::text('fb_link', null, ['id' => 'fb_link', 'class' => 'form-control', 'size' => '40', 'maxlength' => '100', 'style' => 'width: 500px;']) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('insta_link', 'Instagram Link (optional)', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                {{ Form::text('insta_link', null, ['id' => 'insta_link', 'class' => 'form-control', 'size' => '40', 'maxlength' => '100', 'style' => 'width: 500px;']) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('tiktok_link', 'Tiktok Link (optional)', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                {{ Form::text('tiktok_link', null, ['id' => 'tiktok_link', 'class' => 'form-control', 'size' => '40', 'maxlength' => '100', 'style' => 'width: 500px;']) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('twittler_link', 'X | Twitter Link (optional)', ['class' => 'control-label col-sm-3']) }}
            <div class="col-sm-5">
                {{ Form::text('x_link', null, ['id' => 'twittler_link', 'class' => 'form-control', 'size' => '40', 'maxlength' => '100', 'style' => 'width: 500px;']) }}
            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-5">
                {{ Form::submit($radio->exists ? 'Edit' : 'Create', ['class' => 'btn btn-primary']) }}
            </div>
        </div>

        {{ Form::close() }}


    @stop

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var categorySelect = document.getElementById('category');
            var subcategorySelect = document.getElementById('sub_category');

            categorySelect.addEventListener('change', function() {
                var categoryId = this.value;
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '/admin/get-subcategories?category_id=' + categoryId, true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var subcategories = JSON.parse(xhr.responseText);
                        subcategorySelect.innerHTML = '<option value="">Select Subcategory</option>';
                        for (var id in subcategories) {
                            if (subcategories.hasOwnProperty(id)) {
                                var option = document.createElement('option');
                                option.value = id;
                                option.textContent = subcategories[id];
                                subcategorySelect.appendChild(option);
                            }
                        }
                    } else {
                        // Handle error
                    }
                };
                xhr.send();
            });
        });
    </script>

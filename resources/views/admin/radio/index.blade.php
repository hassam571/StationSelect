
@extends('admin.layouts.app')

@section('header', 'Radio')

@section('content')
<div class="content">
        <div class="row">
            <div class="content-top-button mb-2">
                <a href="{{ route('admin.radio.create') }}" class='pull-right btn btn-success btn-sm'><i class='fa fa-plus'></i> Add
                    New</a>
            </div>
        </div>
        <div class="table-responsive">
            @include('flash::message')
            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
			<thead>
				<th>Action</th>
                <th>Website</th>
                <th>Country</th>
                <th>Genres</th>
                <th>Name</th>
                {{-- <th>Streaming Url</th> --}}
				<th>Image</th>
                {{-- <th>Description</th> --}}
            </thead>
            <tbody>
                @foreach ($radio as $item)
                    <tr>
                        <td>
                            <a href="{{ route('admin.radio-show', $item->id) }}" style="float:left" type="button" class="btn btn-success"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.radio-edit', $item->id) }}" style="float:left" type="button" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            {{
                                Form::open([
                                'url' => route('admin.radio-delete', $item->id),
                                'method' => 'GET',
                                'class' => 'pull-left'
                            ])
                            }}
                            <button class="btn btn-danger" onclick="if(!confirm('Are you sure you want to delete ?')) return false;"> <i class='fa fa-trash'> </i></button>
                            {{ Form::close() }}

                            @if($item->featured == 0)
                            {{
                                Form::open([
                                'url' => route('admin.radio-featured', $item->id),
                                'method' => 'GET',
                                'class' => 'pull-left'
                            ])
                            }}
                            <button class="btn btn-success ml-2" onclick="if(!confirm('Are you sure you want to Make this station as Pro/Featured ?')) return false;">Pro <i class='fa fa-plus'> </i></button>
                            {{ Form::close() }}
                            @else
                            {{
                                Form::open([
                                'url' => route('admin.radio-remove-featured', $item->id),
                                'method' => 'GET',
                                'class' => 'pull-left'
                            ])
                            }}
                            <button class="btn btn-danger ml-2" onclick="if(!confirm('Are you sure you want to remove this station from Pro/Featured ?')) return false;">Pro <i class='fa fa-times-circle'> </i></button>
                            {{ Form::close() }}
                            @endif
                        </td>
                        <td>{{ $item->station_website ? $item->station_website : "" }}</td>
                        <td>{{ $item->country ? $item->country->name : "" }}</td>
                        <td>{{ $item->genres ? $item->genres->name : "" }}</td>
                        <td>{{ $item->name }}</td>
                        {{-- <td>{{ $item->streaming_link }}</td> --}}
                        <td><img src="{{ asset( 'images/logos/'.$item->staion_logo) }}" width="100" height="100" class="img-responsive table-img"></td>
                        {{-- <td>{{ $item->description }}</td> --}}
                    </tr>
                @endforeach

            </tbody>
		</table>
	</div>

@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#datatable').DataTable({
        responsive: true
    });
});
</script>

@endpush

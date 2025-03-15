
@extends('admin.layouts.app')

@section('header', 'Country')

@section('content')
    <div class="content">
        <div class="row">
            <div class="content-top-button mb-2">
                <a href="{{ route('admin.country.create') }}" class='pull-right btn btn-success btn-sm'><i class='fa fa-plus'></i> Add
                    New</a>
            </div>
        </div>
        <div class="table-responsive">
            @include('flash::message')
            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                    <th>Action</th>
                    <th>Name</th>
                    <th>Image</th>
                </thead>
                <tbody>
                    @foreach ($image as $item)
                        <tr>
                            <td>
                                <a href="{{ route('admin.country-edit', $item->id) }}" style="float:left" type="button" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                {{
                                    Form::open([
                                    'url' => route('admin.country-delete', $item->id),
                                    'method' => 'GET',
                                    'class' => 'pull-left'
                                ])
                                }}
                                <button class="btn btn-danger" onclick="if(!confirm('If you delete the country then all radio list are also deleted.')) return false;"> <i class='fa fa-trash'> </i></button>
                                {{ Form::close() }}
                            </td>
                            <td>{{ $item->name }}</td>
                            <td><img src="{{ asset(config('dashboard.country_image') . $item->image) }}" width="100" height="100" class="img-responsive table-img"></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
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

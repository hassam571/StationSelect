
@extends('admin.layouts.app')

@section('header', 'Feedback')

@section('seconday-header')

@section('content')
<div class="content">
        <div class="table-responsive">
            @include('flash::message')
            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
			<thead>
				<th>Action</th>
                <th>Name</th>
                <th>Comment</th>
                <th>Status</th>
            </thead>
            <tbody>
                @foreach ($feedback as $item)
                <tr>
                    <td>
                        {{ Form::open(['url' => route('admin.feedback.destroy', $item->id), 'method' => 'Delete', 'class' => 'pull-left']) }}
                        <button class="btn btn-danger" onclick="if(!confirm('Are you sure you want to delete?')) return false;">
                            <i class='fa fa-trash'></i>
                        </button>
                        {{ Form::close() }}
                        @if ($item->status != 1)
                        {{-- Approve comment button --}}
                        {{ Form::open(['url' => route('admin.feedback.update', $item->id), 'method' => 'PUT', 'class' => 'pull-left']) }}
                        <button class="btn btn-success" onclick="if(!confirm('Are you sure you want to approve this comment?')) return false;">
                            Approve
                        </button>

                        {{ Form::close() }}
                    @endif
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->comment }}</td>
                    <td>{{ $item->status == 1 ? 'Approved' : 'Pending' }}</td>

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

@extends('frontend.master')

@section('custom')
@include('frontend.body.banner')

<div class="container_content">
    <div class="container_center">
        <div class="breadcrumbs_outer">
            <nav class="breadcrumbs">
                <a href="/">Home</a>&ensp;<img src="/img/bullet1.png" alt="">&ensp;My Stations
            </nav>
            <div class="breadcrumbs_spacer"></div>
        </div>

        <main class="content_main">
            <div class="list_stations">
                <div class="list_header clearfix">
                    <h3 class="heading_large heading_list">🎵 My Stations</h3>
                </div>

               
    <!-- Stations Grid -->
    <div class="row">
        @foreach ($stations as $station)
            @php
                $country = App\Models\Country::find($station->country_id);
                $genre = App\Models\Genres::find($station->genres_id);
            @endphp

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <!-- Station Image -->
                    <a href="{{ route('station-details', $station->slug) }}" class="text-decoration-none">
                        <img 
                            src="{{ asset('images/logos/' . $station->staion_logo) }}" 
                            class="card-img-top" 
                            alt="{{ $station->name }}" 
                            style="object-fit: cover; height:200px;"
                        >
                    </a>

                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Station Name -->
                        <h5 class="card-title mb-2">
                            <a href="{{ route('station-details', $station->slug) }}" class="text-dark text-decoration-none">
                                {{ $station->name }}
                            </a>
                        </h5>
                        <!-- Genre & Country -->
                        <p class="card-text text-muted mb-1">
                            <strong>Genre:</strong> {{ $genre->name ?? 'N/A' }}
                        </p>
                        <p class="card-text text-muted">
                            <strong>Country:</strong> {{ $country->name ?? 'N/A' }}
                        </p>
                    </div>

                    <!-- Card Footer (Edit/Delete) -->
                    <div class="card-footer bg-white border-top-0 d-flex justify-content-between align-items-center">
                        <a href="{{ route('station.edit', $station->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('station.delete', $station->id) }}" method="POST" class="mb-0">
                            @csrf
                            @method('DELETE')
                            <button 
                                type="submit" 
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this station?');"
                            >
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

                <!-- Pagination -->
                {{-- <div class="paging">
                    {{ $stations->links('vendor.pagination.bootstrap-4') }}
                </div> --}}
            </div>
        </main>

        @include('frontend.body.side_content')
        <div class="clear"></div>
    </div>
</div>

<style>
    /* General Styling */
    body {
        background-color: #f5f7fa;
        font-family: 'Poppins', sans-serif;
    }

    .container_content {
        max-width: 1200px;
        margin: auto;
        padding: 20px;
    }

    .list_stations {
        background: #fff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .list_header h3 {
        font-size: 24px;
        font-weight: 600;
        color: #333;
        text-align: center;
        padding-bottom: 10px;
        border-bottom: 2px solid #ff4081;
    }

    /* Station Card */
    .list_item.card {
        background: #ffffff;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        transition: 0.3s;
        display: flex;
        align-items: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .list_item.card:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .image_outer {
        position: relative;
        margin-right: 20px;
    }

    .station-logo {
        width: 100px;
        height: 100px;
        border-radius: 10px;
        object-fit: cover;
    }

    .country-label {
        position: absolute;
        bottom: 8px;
        left: 10px;
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
        font-size: 12px;
        padding: 4px 8px;
        border-radius: 5px;
    }

    /* Station Details */
    .station-details {
        flex-grow: 1;
    }

    .station-name a {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        text-decoration: none;
    }

    .station-name a:hover {
        color: #ff4081;
    }

    .station-genre {
        font-size: 14px;
        color: #666;
    }

    /* Buttons */
    .station_actions {
        display: flex;
        gap: 10px;
    }

    .btn-edit,
    .btn-delete {
        display: inline-block;
        padding: 8px 12px;
        font-size: 14px;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-edit {
        background: #3498db;
        color: #fff;
        border: none;
    }

    .btn-edit:hover {
        background: #217dbb;
    }

    .btn-delete {
        background: #e74c3c;
        color: #fff;
        border: none;
    }

    .btn-delete:hover {
        background: #c0392b;
    }

    /* Pagination Styling */
    .paging {
        text-align: center;
        margin-top: 20px;
    }

    .paging .pagination {
        display: flex;
        justify-content: center;
        padding: 10px 0;
    }

    .paging .pagination .page-item .page-link {
        padding: 8px 12px;
        margin: 0 5px;
        border-radius: 5px;
        border: 1px solid #ddd;
        color: #333;
        transition: 0.3s;
    }

    .paging .pagination .page-item.active .page-link {
        background: #ff4081;
        color: #fff;
        border: none;
    }

    .paging .pagination .page-item .page-link:hover {
        background: #ff4081;
        color: #fff;
    }
</style>

@endsection
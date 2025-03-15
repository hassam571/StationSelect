@extends('frontend.master')
@section('custom')
    <div class="container_content">
        <div class="container_center">
            <div class="breadcrumbs_outer">
                <nav class="breadcrumbs">
                    <a href="{{ route('frontend.index') }}">Home</a>&ensp;<img src="{{ ("assets/frontend/img/bullet1.png") }}" alt />&ensp;Countries
                </nav>
                <div class="breadcrumbs_spacer"></div>
            </div>
            <div class="container-fluid my-5 col-lg-8 col-md-8">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <div class="list_categories p-4 rounded shadow-lg bg-light">
                            <!-- Header for the Genres List -->
                            <div class="list_header text-center mb-4">
                                <h3 class="heading_large text-primary">Genres</h3>
                                <p class="text-muted">Explore diverse genres and discover stations from around the world.</p>
                            </div>
            
                            <!-- Genres List with Alphabetical Index in Horizontal Layout -->
                            <div class="genre_list d-flex flex-wrap">
                                @foreach ($genres as $genre)
                                    @php
                                        $stationsCount = \App\Models\RadioList::where('genres_id', $genre->id)->count();
                                        $firstLetter = strtoupper(substr($genre->name, 0, 1));
                                    @endphp
            
                                    <!-- Display the Alphabetical Index Header if it changes -->
                                    @if (!isset($currentLetter) || $currentLetter !== $firstLetter)
                                        @php $currentLetter = $firstLetter; @endphp
                                        <div class="genre_index_section col-lg-4 col-md-6 col-sm-12 mb-4">
                                            <div class="index bg-primary text-white p-2 rounded mb-3 text-center">{{ $currentLetter }}</div>
                                    @endif
            
                                    <!-- Genre Link and Station Count -->
                                    <div class="list_item mb-2">
                                        <a href="{{ route('all-stations', ['genre' => $genre->id]) }}" class="genre_link d-flex align-items-center justify-content-between px-3 py-2 rounded shadow-sm">
                                            <span class="genre_name">{{ $genre->name }}</span>
                                            <span class="station_count">{{ $stationsCount }} Stations</span>
                                        </a>
                                    </div>
            
                                    <!-- Close Section for New Alphabet Group -->
                                    @if ($loop->last || strtoupper(substr($genres[$loop->index + 1]->name, 0, 1)) !== $firstLetter)
                                        </div> <!-- End of genre_index_section -->
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Custom CSS for Styling the Genre List -->
            <style>
                /* Full-Width Container */
                .container-fluid {
                    max-width: 100%;
                }
            
                /* Genre List Styling */
                .list_categories {
                    background-color: #f9f9f9;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                }
            
                .list_header h3 {
                    font-weight: 600;
                    font-size: 24px;
                    color: #2a9df4;
                }
            
                /* Alphabetical Index Section */
                .genre_index_section {
                    flex: 1 1 30%;
                    display: flex;
                    flex-direction: column;
                    align-items: flex-start;
                }
            
                .index {
                    font-weight: bold;
                    font-size: 1.3em;
                    padding: 8px;
                    background-color: #007bff;
                    color: #fff;
                    border-radius: 5px;
                    text-align: center;
                    width: 100%;
                }
            
                /* Genre Link Styling */
                .list_item {
                    width: 100%;
                }
            
                .genre_link {
                    text-decoration: none;
                    font-size: 16px;
                    font-weight: 500;
                    color: #333;
                    background-color: #ffffff;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
                }
            
                .genre_link:hover {
                    background-color: #ff2222;
                    color: #ffffff;
                }
            
                /* Station Count Styling */
                .station_count {
                    font-size: 14px;
                    font-weight: 600;
                    background-color: #007bff;
                    color: #fff;
                    padding: 4px 8px;
                    border-radius: 12px;
                }
            
                .genre_link:hover .station_count {
                    background-color: #ffeb3b;
                    color: #333;
                }
            </style>
            
            @include('frontend.body.side_content')
            <div class="clear"></div>
        </div>
    </div>
@endsection

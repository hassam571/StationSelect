@extends('frontend.master')

@section('custom')
@include('frontend.body.banner')

<style>
    /* Optional: Card Hover Effect */
    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        transition: all 0.3s ease;
    }

    /* Section Headings */
    h5.text-primary {
        border-left: 4px solid #f8473e;
        padding-left: 8px;
    }

    /* Form Inputs on Focus */
    .form-control:focus,
    .form-select:focus {
        box-shadow: 0 0 0 0.2rem rgba(248, 71, 62, 0.25);
        border-color: #f8473e;
    }

    /* Custom Divider Style */
    hr {
        border-top: 2px dashed #ddd;
    }

    /* Adjust button hover color */
    .btn:hover {
        background-color: #e63b30 !important;
    }

    /* Responsive Spacing Tweaks */
    @media (max-width: 576px) {
        .card {
            margin: 0 10px;
        }
    }


    /* Target the nice-select wrapper and all text within */
.nice-select,
.nice-select * {
  color: #000 !important; /* Force black text */
}

/* Optionally, override hover/focus states as well */
.nice-select .list .option:hover,
.nice-select .list .option.focus,
.nice-select .list .option.selected,.form-label {
  color: grey !important;
}
</style>

<div class="container_content">
    <div class="container_center">
        <div class="breadcrumbs_outer">
            <nav class="breadcrumbs">
                <a href="/">Home</a>&ensp;<img src="/img/bullet1.png" alt="">&ensp;Edit Station
            </nav>
            <div class="breadcrumbs_spacer"></div>
        </div>

        <main class="content_main">
            <div class="container py-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <!-- Card Header -->
                    <div class="card-header text-center bg-white border-0">
                        <h3 class="text-uppercase fw-bold" style="color: #f8473e;">
                            <i class="fas fa-broadcast-tower"></i> Edit Station Form
                        </h3>
                        <p class="text-muted mb-0">
                            Update your radio station details. Modify the station name, website, country, genres, and description.
                        </p>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body p-4 p-md-5">
                        <form action="{{ route('station.update', $station->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Section: Station Images -->
                            <h5 class="fw-bold text-primary mb-3">1. Station Images</h5>
                            <div class="row g-3">
                                <!-- Station Picture -->
                                <div class="col-md-6">
                                    <label for="image" class="form-label fw-bold">Station Picture <span class="text-danger">*</span></label>
                                    <input type="file" id="image" name="image" class="form-control border-secondary">
                                    <small class="text-muted">(JPEG, at least 180x172px size)</small>
                                    @if($station->staion_logo)
                                        <img src="{{ asset('images/logos/' . $station->staion_logo) }}" alt="{{ $station->name }}" style="width: 180px; margin-top: 10px;">
                                    @endif
                                </div>
                                <!-- Station Banner -->
                                <div class="col-md-6">
                                    <label for="banner_image" class="form-label fw-bold">Station Banner Picture <span class="text-danger">*</span></label>
                                    <input type="file" id="banner_image" name="banner_image" class="form-control border-secondary">
                                    @if($station->staion_banner)
                                        <img src="{{ asset('images/banner_images/' . $station->staion_banner) }}" alt="{{ $station->name }}" style="width: 180px; margin-top: 10px;">
                                    @endif
                                </div>
                            </div>

                            <hr class="my-4" />

                            <!-- Section: Basic Information -->
                            <h5 class="fw-bold text-primary mb-3">2. Basic Information</h5>
                            <div class="row g-3">
                                <!-- Station Name -->
                                <div class="col-md-6">
                                    <label for="name" class="form-label fw-bold">Station Name <span class="text-danger">*</span></label>
                                    <input type="text" id="name" name="name" class="form-control border-secondary" maxlength="100" placeholder="Enter station name" value="{{ $station->name }}">
                                </div>
                                <!-- Website -->
                                <div class="col-md-6">
                                    <label for="www" class="form-label fw-bold">Station Website (Optional)</label>
                                    <input type="url" id="www" name="station_website" class="form-control border-secondary" placeholder="https://example.com" value="{{ $station->station_website }}">
                                </div>
                            </div>

                            <div class="row g-3 mt-3">
                                <!-- Category -->
                                <div class="col-md-6">
                                    <label for="category" class="form-label fw-bold">Category</label>
                                    <select id="category" name="category_id" class="form-select border-secondary">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $station->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Sub Category -->
                                <div class="col-md-6">
                                    <label for="sub_category" class="form-label fw-bold">Sub Category</label>
                                    <select id="sub_category" name="sub_category_id" class="form-select border-secondary">
                                        <option value="">Select Sub Category</option>
                                        @foreach ($sub_categories as $sub_category)
                                            <option value="{{ $sub_category->id }}" {{ $sub_category->id == $station->sub_category_id ? 'selected' : '' }}>
                                                {{ $sub_category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="mt-3">
                                <label for="text" class="form-label fw-bold">Description <span class="text-danger">*</span></label>
                                <textarea id="text" name="description" class="form-control border-secondary" rows="4" placeholder="Enter description">{{ $station->description }}</textarea>
                            </div>

                            <hr class="my-4" />

                            <!-- Section: Location & Genre -->
                            <h5 class="fw-bold text-primary mb-3">3. Location & Genre</h5>
                            <div class="row g-3">
                                <!-- Country -->
                                <div class="col-md-6">
                                    <label for="country_id" class="form-label fw-bold">Country <span class="text-danger">*</span></label>
                                    <select id="country_id" name="country_id" class="form-select border-secondary">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}" {{ $country->id == $station->country_id ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Genre -->
                                <div class="col-md-6">
                                    <label for="genre" class="form-label fw-bold">Genre <span class="text-danger">*</span></label>
                                    <select id="genre" name="genres_id" class="form-select border-secondary">
                                        <option value="">Select Genre</option>
                                        @foreach ($genres as $genre)
                                            <option value="{{ $genre->id }}" {{ $genre->id == $station->genres_id ? 'selected' : '' }}>
                                                {{ $genre->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Stream URL -->
                            <div class="mt-3">
                                <label for="stream" class="form-label fw-bold">Stream URL <span class="text-danger">*</span></label>
                                <input type="url" id="stream" name="streaming_link" class="form-control border-secondary" placeholder="Enter stream URL" value="{{ $station->streaming_link }}">
                            </div>

                            <hr class="my-4" />

                            <!-- Section: Social Media Links -->
                            <h5 class="fw-bold text-primary mb-3">4. Social Media Links (Optional)</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="fb_link" class="form-label fw-bold">Facebook</label>
                                    <input type="url" id="fb_link" name="fb_link" class="form-control border-secondary" placeholder="https://facebook.com" value="{{ $station->fb_link }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="insta_link" class="form-label fw-bold">Instagram</label>
                                    <input type="url" id="insta_link" name="insta_link" class="form-control border-secondary" placeholder="https://instagram.com" value="{{ $station->insta_link }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="tiktok_link" class="form-label fw-bold">TikTok</label>
                                    <input type="url" id="tiktok_link" name="tiktok_link" class="form-control border-secondary" placeholder="https://tiktok.com" value="{{ $station->tiktok_link }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="twittler_link" class="form-label fw-bold">X | Twitter</label>
                                    <input type="url" id="twittler_link" name="x_link" class="form-control border-secondary" placeholder="https://twitter.com" value="{{ $station->x_link }}">
                                </div>
                            </div>

                            <hr class="my-4" />

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn fw-bold text-white py-2" style="background-color: #f8473e;">
                                    <i class="fas fa-paper-plane"></i> Update Station
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        @include('frontend.body.side_content')
        <div class="clear"></div>
    </div>
</div>

<script>
    document.getElementById('category').addEventListener('change', function() {
        var categoryId = this.value;
        var subCategorySelect = document.getElementById('sub_category');
        subCategorySelect.innerHTML = '<option value="">Loading...</option>';

        // Fetch subcategories for the selected category via AJAX
        fetch('/get-subcategories/' + categoryId)
            .then(response => response.json())
            .then(data => {
                subCategorySelect.innerHTML = '<option value="">Select Sub Category</option>';
                data.forEach(function(subCategory) {
                    var option = document.createElement('option');
                    option.value = subCategory.id;
                    option.textContent = subCategory.name;
                    subCategorySelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error:', error);
                subCategorySelect.innerHTML = '<option value="">Failed to load subcategories</option>';
            });
    });
</script>
@endsection
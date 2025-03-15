



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
</style>
<div class="container_content">
    <div class="container_center">
        <div class="breadcrumbs_outer">
            <nav class="breadcrumbs">
                <a href="/">Home</a>&ensp;<img src="/img/bullet1.png" alt="">&ensp;Submit Station
            </nav>
            <div class="breadcrumbs_spacer"></div>
        </div>

        <main class="content_main">
            <div class="container py-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <!-- Card Header -->
                    <div class="card-header text-center bg-white border-0">
                        <h3 class="text-uppercase fw-bold" style="color: #f8473e;">
                            <i class="fas fa-broadcast-tower"></i> Station Submission Form
                        </h3>
                        <p class="text-muted mb-0">
                            Add a Radio Station to Station Select. Please provide the station name, website, country, genres played, and a short description.
                        </p>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body p-4 p-md-5">
                        <form action="{{ route('submit-station') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <!-- Section: Images -->
                            <h5 class="fw-bold text-primary mb-3">1. Station Images</h5>
                            <div class="row g-3">
                                <!-- Station Picture -->
                                <div class="col-md-6">
                                    <label for="image" class="form-label fw-bold">Station Picture <span class="text-danger">*</span></label>
                                    <input type="file" id="image" name="image" class="form-control border-secondary">
                                    <small class="text-muted">(JPEG, at least 180x172px size)</small>
                                </div>
                                <!-- Station Banner -->
                                <div class="col-md-6">
                                    <label for="banner_image" class="form-label fw-bold">Station Banner Picture <span class="text-danger">*</span></label>
                                    <input type="file" id="banner_image" name="banner_image" class="form-control border-secondary">
                                </div>
                            </div>

                            <hr class="my-4" />

                            <!-- Section: Basic Info -->
                         <!-- Section: Basic Info -->
<h5 class="fw-bold text-primary mb-3">2. Basic Information</h5>

<div class="row g-3">
    <!-- Station Name -->
    <div class="col-md-6">
        <label for="name" class="form-label fw-bold">
            Station Name <span class="text-danger">*</span>
        </label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control border-secondary"
            maxlength="100"
            placeholder="Enter station name"
        >
    </div>

    <!-- Website -->
    <div class="col-md-6">
        <label for="www" class="form-label fw-bold">Station Website (Optional)</label>
        <input
            type="url"
            id="www"
            name="station_website"
            class="form-control border-secondary"
            placeholder="https://example.com"
        >
    </div>
</div>

<div class="row g-3 mt-3">
    <!-- Category -->
    <div class="col-md-6">
        <label for="category" class="form-label fw-bold">Category</label>
        <select id="category" name="category_id" class="form-select border-secondary">
            <option value="" selected>Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Sub Category -->
    <div class="col-md-6">
        <label for="sub_category" class="form-label fw-bold">Sub Category</label>
        <select id="sub_category" name="sub_category_id" class="form-select border-secondary">
            <option value="" selected>Select Sub Category</option>
            @foreach ($sub_categories as $sub_categorie)
                <option value="{{ $sub_categorie->id }}">{{ $sub_categorie->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<!-- Description -->
<div class="mt-3">
    <label for="text" class="form-label fw-bold">
        Description <span class="text-danger">*</span>
    </label>
    <textarea
        id="text"
        name="description"
        class="form-control border-secondary"
        rows="4"
        placeholder="Enter description"
    ></textarea>
</div>

                            <!-- Description -->
                            <div class="mt-3">
                                <label for="text" class="form-label fw-bold">Description <span class="text-danger">*</span></label>
                                <textarea 
                                    id="text" 
                                    name="description" 
                                    class="form-control border-secondary" 
                                    rows="4" 
                                    placeholder="Enter description"
                                ></textarea>
                            </div>

                            <hr class="my-4" />

                            <!-- Section: Location & Genre -->
                            <h5 class="fw-bold text-primary mb-3">3. Location & Genre</h5>
                            <div class="row g-3">
                                <!-- Country -->
                                <div class="col-md-6">
                                    <label for="country_id" class="form-label fw-bold">Country <span class="text-danger">*</span></label>
                                    <select id="country_id" name="country_id" class="form-select border-secondary">
                                        <option value="" selected>Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Genre -->
                                <div class="col-md-6">
                                    <label for="genre" class="form-label fw-bold">Genre <span class="text-danger">*</span></label>
                                    <select id="genre" name="genres_id" class="form-select border-secondary">
                                        <option value="" selected>Select Genre</option>
                                        @foreach ($genres as $genre)
                                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Stream URL -->
                            <div class="mt-3">
                                <label for="stream" class="form-label fw-bold">Stream URL <span class="text-danger">*</span></label>
                                <input 
                                    type="url" 
                                    id="stream" 
                                    name="streaming_link" 
                                    class="form-control border-secondary" 
                                    placeholder="Enter stream URL"
                                >
                            </div>

                            <hr class="my-4" />

                            <!-- Section: Social Links -->
                            <h5 class="fw-bold text-primary mb-3">4. Social Media Links (Optional)</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="fb_link" class="form-label fw-bold">Facebook</label>
                                    <input 
                                        type="url" 
                                        id="fb_link" 
                                        name="fb_link" 
                                        class="form-control border-secondary" 
                                        placeholder="https://facebook.com"
                                    >
                                </div>
                                <div class="col-md-6">
                                    <label for="insta_link" class="form-label fw-bold">Instagram</label>
                                    <input 
                                        type="url" 
                                        id="insta_link" 
                                        name="insta_link" 
                                        class="form-control border-secondary" 
                                        placeholder="https://instagram.com"
                                    >
                                </div>
                                <div class="col-md-6">
                                    <label for="tiktok_link" class="form-label fw-bold">TikTok</label>
                                    <input 
                                        type="url" 
                                        id="tiktok_link" 
                                        name="tiktok_link" 
                                        class="form-control border-secondary" 
                                        placeholder="https://tiktok.com"
                                    >
                                </div>
                                <div class="col-md-6">
                                    <label for="twittler_link" class="form-label fw-bold">X | Twitter</label>
                                    <input 
                                        type="url" 
                                        id="twittler_link" 
                                        name="x_link" 
                                        class="form-control border-secondary" 
                                        placeholder="https://twitter.com"
                                    >
                                </div>
                            </div>

                            <hr class="my-4" />

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button 
                                    type="submit" 
                                    class="btn fw-bold text-white py-2"
                                    style="background-color: #f8473e;"
                                >
                                    <i class="fas fa-paper-plane"></i> Submit Station
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

        // Send AJAX request to fetch subcategories for the selected category
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
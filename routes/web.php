<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NotificationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$adminGroup = [
    'prefix' => 'admin',
    "as" => "admin.",
    "namespace" => "Admin",
];

// Route::get('/', 'Admin\DashboardController@admin');

Route::group($adminGroup, function () {

    Route::get('/login', 'AuthController@showLoginForm')->name('login');

    Route::post('/login', 'AuthController@login')->name('login-submit');


    Route::group(["middleware" => "auth:admin"], function () {

        Route::post('/logout', 'AuthController@logout')->name('logout');

        Route::get('/', 'DashboardController@admin');

        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


        Route::resource('radio', 'RadioController');

        Route::get('radio/edit/{id}','RadioController@edit')->name('radio-edit');
        Route::post('radio/update/{id}','RadioController@update')->name('radio-update');
        Route::get('radio/delete/{id}','RadioController@destroy')->name('radio-delete');
        Route::get('radio/show/{id}','RadioController@show')->name('radio-show');
        Route::get('radio/featured/{id}','RadioController@featured')->name('radio-featured');
        Route::get('radio/remove-featured/{id}','RadioController@removeFeatured')->name('radio-remove-featured');


        Route::get('mostly/played/radio-list', 'RadioController@mostlyPlayed')
            ->name('mostly-played.index');

        Route::get('mostly/played/radio/{id}/show', 'RadioController@mostlyPlayedShow')
            ->name('mostly-played.show');



        Route::resource('genres', 'GenresController');

        Route::get('genres/edit/{id}','GenresController@edit')->name('genres-edit');
        Route::post('genres/update/{id}','GenresController@update')->name('genres-update');

        Route::get('genres/delete/{id}','GenresController@destroy')->name('genres-delete');


        Route::resource('country', 'CountryController');

        Route::get('country/edit/{id}','CountryController@edit')->name('country-edit');
        Route::post('country/update/{id}','CountryController@update')->name('country-update');
        Route::get('country/delete/{id}','CountryController@destroy')->name('country-delete');


        Route::resource('notification', 'NotificationController');

       
        Route::resource('language', 'LanguageController');

        Route::resource('category', 'CategoryController');

        Route::get('category/edit/{id}','CategoryController@edit')->name('category-edit');
        Route::post('category/update/{id}','CategoryController@update')->name('category-update');
        Route::get('category/delete/{id}','CategoryController@destroy')->name('category-delete');


        Route::resource('subcategory', 'SubCategoryController');


        Route::get('subcategory/edit/{id}','SubCategoryController@edit')->name('subcategory-edit');
        Route::post('subcategory/update/{id}','SubCategoryController@update')->name('subcategory-update');
        Route::get('subcategory/delete/{id}','SubCategoryController@delete_subcategory')->name('subcategory-delete');

        Route::resource('feedback', 'FeedbackController');

        // Route::put('/comment/approve/{id}', 'RadioController@approve')->name('comment-approve');

        Route::get('streaming/report', 'ReportController@index')
            ->name('report.index');

        Route::delete('streaming/report/{id}', 'ReportController@destroy')
            ->name('streaming-report.destroy');

        Route::get('get-subcategories', 'CategoryController@getSubcategories')->name('get-subcategories');



    });



});
Route::get('/login', 'Frontend\AuthController@showLoginForm')->name('frontend.login')->middleware('guest');
Route::post('/forget-password', 'Frontend\AuthController@forgetPassword')->name('frontend.forgetPasswordFunction')->middleware('guest');
Route::get('/forget-password', 'Frontend\AuthController@showforgetPasswordForm')->name('frontend.forgetPassword')->middleware('guest');
Route::post('/new-password/reset', 'Frontend\AuthController@resetPassword')->name('frontend.updatePassword');
Route::get('/password/reset/{token}', 'Frontend\AuthController@resetPasswordForm')->name('password.reset');
Route::get('/register', 'Frontend\AuthController@showRegisterForm')->name('frontend.register')->middleware('guest');
Route::post('/register', 'Frontend\AuthController@register')->name('frontend.register.alpha');

Route::post('/logout', 'Frontend\AuthController@logout')->name('frontend.logout');

Route::group(['middleware' => 'auth.frontend'],function () {
    Route::get('/profile/edit', 'Frontend\ProfileController@edit')->name('profile.edit');
    Route::post('/profile/update', 'Frontend\ProfileController@update')->name('profile.update');
    Route::get('/profile/edit-password', 'Frontend\ProfileController@password')->name('profile.password');
    Route::post('/profile/change-password', 'Frontend\ProfileController@changePassword')->name('profile.change-password');


    Route::get('/add-station', 'Frontend\StationsController@create')->name('add-station');
    Route::get('/my-stations', 'Frontend\StationsController@my_stations')->name('my-stations');

    // Route to show the edit form for a station
    Route::get('/stations/{id}/edit', 'Frontend\StationsController@edit')->name('station.edit');

    // Route to update the station details
    Route::put('/stations/{id}', 'Frontend\StationsController@update')->name('station.update');

    // Route to delete a station
    Route::delete('/stations/{id}', 'Frontend\StationsController@destroy')->name('station.delete');


    Route::post('/submit-station', 'Frontend\StationsController@store')->name('submit-station');

    Route::post('/toggle-favorites', 'Frontend\FavoriteController@toggleFavorites')->name('toggle-favorites');

    Route::get('/favourite-stations','Frontend\StationsController@favouriteStations')->name('favourite-stations');


});
Route::get('/all-stations', 'Frontend\StationsController@index')->name('all-stations');
Route::get('/station/{slug}', 'Frontend\StationsController@show')->name('station-details');
Route::get('/get-subcategories/{categoryId}', 'Admin\SubCategoryController@getSubCategories');
Route::get('/countries', 'Admin\CountryController@showCountries')->name('countries');
Route::get('/genres', 'Admin\GenresController@showGenres')->name('genres');
Route::get('/station-country/{country}', 'Admin\CountryController@showCountries')->name('stations.country');
Route::get('/station-genres/{genre}', 'Admin\CountryController@showCountries')->name('stations.genre');
Route::get('/search', 'Frontend\HomeController@search')->name('search');
Route::post('/report-issue', 'Frontend\StationsController@reportIssue')->name('report-issue');
Route::get('/faq', 'Frontend\HomeController@faq')->name('faq');
Route::get('/about-us', 'Frontend\HomeController@about_us')->name('about-us');
Route::get('/banners', 'Frontend\HomeController@banners')->name('banners');
Route::get('/broadcaster', 'Frontend\HomeController@broadcaster')->name('broadcaster');
Route::get('/privacy-policy', 'Frontend\HomeController@privacy_policy')->name('privacy');
Route::get('/help', 'Frontend\HomeController@help')->name('help');
Route::get('/contact-us', 'Frontend\HomeController@contact')->name('contact');
Route::post('/add-comment', 'Frontend\StationsController@addComments')->name('comment');
Route::get('/get-pro', 'Frontend\StationsController@get_pro')->name('pro');





Route::post('/login', 'Frontend\AuthController@login')->name('frontend.login-submit');
Route::get('/','Frontend\HomeController@index')->name('frontend.index');

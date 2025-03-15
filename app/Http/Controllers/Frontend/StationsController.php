<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genres;
use App\Models\Country;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Favourite;
use Illuminate\Support\Str;
use App\Models\RadioList;
use App\Models\StreamingIssueReport;
use App\Models\Feedback;

class StationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function index(Request $request)
     {
         // Query for stations
         $stationsQuery = RadioList::query();

         // Filter by country if provided in the request
         if ($request->has('country')) {
             $stationsQuery->where('country_id', $request->country);
         }

         // Filter by genre if provided in the request
         if ($request->has('genre')) {
             $stationsQuery->where('genres_id', $request->genre);
         }

         if($request->has('top-20')){
            // Get top 20 stations by count
            $topStations = RadioList::where('count', '>', 0)
            ->orderByDesc('count')
            ->limit(20)
            ->Paginate(20);
            $stations = $topStations;
         }
         else{
            $stations = $stationsQuery->paginate(20);

         }



         // Paginate the stations query

         // Pass top stations and paginated stations to the view
         return view('frontend.stations.all_stations', compact('stations'));
     }


    public function my_stations()
    {
        $user_id = auth()->user()->id;

        $stations = RadioList::where('user_id',$user_id)->paginate(10); 
        return view('frontend.stations.my_stations',compact('stations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genres::all();
        $countries = Country::all();
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        return view('frontend.stations.add_station',compact('genres','countries','categories','sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request data
        $request->validate([
            'country_id' => 'required|integer',
            'category_id' => 'required|integer',
            'sub_category_id' => 'required|integer',
            'genres_id' => 'required|integer',
            'name' => 'required|string',
            'station_website' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'streaming_link' => 'required|string',
            'fb_link' => 'nullable|string',
            'insta_link' => 'nullable|string',
            'tiktok_link' => 'nullable|string',
            'x_link' => 'nullable|string',
            'description' => 'required|string',
        ]);


        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images/logos/'), $imageName);
        $banner_image = time().'.'.$request->banner_image->extension();

        $request->banner_image->move(public_path('images/banner_images/'), $banner_image);

        // Create a new RadioList instance
        $radioList = new RadioList();

        // Assign individual inputs to model attributes
        $radioList->country_id = $request->country_id;
        $radioList->category_id = $request->category_id;
        $radioList->sub_category_id = $request->sub_category_id;
        $radioList->genres_id = $request->genres_id;
        $radioList->name = $request->name;
        $radioList->station_website = $request->station_website;
        $radioList->staion_logo = $imageName;
        $radioList->staion_banner = $banner_image;
        $radioList->streaming_link = $request->streaming_link;
        $radioList->fb_link = $request->fb_link;
        $radioList->insta_link = $request->insta_link;
        $radioList->tiktok_link = $request->tiktok_link;
        $radioList->x_link = $request->x_link;
        $radioList->user_id = auth()->user()->id;
        $radioList->description = $request->description;

        // dd($radioList);
        // Save the RadioList instance to the database
        $radioList->save();

        // Optionally, you can redirect the user to a different page after storing the data
        return redirect()->route('my-stations')->with('success', 'Radio station added successfully.');
    }
     public function get_pro()
    {
        return view('frontend.pro');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function show($slug)
     {
         // Find the station by slug
         $station = RadioList::where('slug', $slug)->first();

         // If station not found, you might want to handle this case, maybe redirect to a 404 page
         if (!$station) {
             abort(404);
         }

         $id = $station->id;
         $station->increment('count');
         // Fetch comments with the given radio_list_id
         $comments = Feedback::where('radio_list_id', $id)->where('status', 1)->get();

         return view('frontend.stations.station_details', compact('station', 'comments'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */public function edit($id)
{
    $station = RadioList::findOrFail($id);
    $genres = Genres::all();
    $countries = Country::all();
    $categories = Category::all();
    $sub_categories = SubCategory::all();
    
    return view('frontend.stations.edit_station', compact('station', 'genres', 'countries', 'categories', 'sub_categories'));
}

public function update(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        'country_id' => 'required|integer',
        'category_id' => 'required|integer',
        'sub_category_id' => 'required|integer',
        'genres_id' => 'required|integer',
        'name' => 'required|string',
        'station_website' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'streaming_link' => 'required|string',
        'fb_link' => 'nullable|string',
        'insta_link' => 'nullable|string',
        'tiktok_link' => 'nullable|string',
        'x_link' => 'nullable|string',
        'description' => 'required|string',
    ]);

    $station = RadioList::findOrFail($id);

    // Update image if a new one is uploaded
    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/logos/'), $imageName);
        $station->staion_logo = $imageName;
    }

    // Update banner image if a new one is uploaded
    if ($request->hasFile('banner_image')) {
        $bannerImageName = time().'.'.$request->banner_image->extension();
        $request->banner_image->move(public_path('images/banner_images/'), $bannerImageName);
        $station->staion_banner = $bannerImageName;
    }

    // Update other fields
    $station->country_id = $request->country_id;
    $station->category_id = $request->category_id;
    $station->sub_category_id = $request->sub_category_id;
    $station->genres_id = $request->genres_id;
    $station->name = $request->name;
    $station->station_website = $request->station_website;
    $station->streaming_link = $request->streaming_link;
    $station->fb_link = $request->fb_link;
    $station->insta_link = $request->insta_link;
    $station->tiktok_link = $request->tiktok_link;
    $station->x_link = $request->x_link;
    $station->description = $request->description;

    $station->save();

    return redirect()->route('my-stations')->with('success', 'Station updated successfully.');
}


public function destroy($id)
{
    $station = RadioList::findOrFail($id);
    $station->delete();

    return redirect()->route('my-stations')->with('success', 'Station deleted successfully.');
}

    public function favouriteStations()
    {
        // Assuming you have a User model and you're fetching favorites for the authenticated user
        $user = auth()->user();

        // Fetch IDs of favorite stations for the authenticated user
        $favoriteIds = Favourite::where('user_id', $user->id)->pluck('radio_id')->toArray();

        // Fetch favorite stations based on the IDs
        $favoriteStations = RadioList::whereIn('id', $favoriteIds)->get();

        return view('frontend.stations.favourite_stations', compact('favoriteStations'));
    }


    public function reportIssue(Request $request)
{
    // Validate the request data as needed

    // Get the radio_list_id from the request
    $radioListId = $request->input('radio_list_id');

    // Increment the number in the message field
    $latestIssue = StreamingIssueReport::where('radio_list_id', $radioListId)->latest()->first();
    $messageNumber = $latestIssue ? $latestIssue->message + 1 : 1;

    // Create a new streaming issue report entry
    StreamingIssueReport::create([
        'radio_list_id' => $radioListId,
        'message' => $messageNumber,
        // Add any other fields you need
    ]);

    // Return a response indicating success
    return response()->json(['success' => true]);
}


public function addComments(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'text' => 'required|string|max:10000',
        ]);

        // dd($request->all());

        // Create a new favorite record
        $feedback = new Feedback();
        $feedback->name = $validatedData['name'];
        $feedback->comment = $validatedData['text'];
        $feedback->radio_list_id = $request->radio_list_id;
        // You can include additional fields if needed
        $feedback->save();

        // Return a response indicating success
        return response()->json(['message' => 'Comment Submitted successfully for Admin Approval'], 200);
    }


}

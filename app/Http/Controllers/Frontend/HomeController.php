<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RadioList;
use App\Models\Country;
use App\Models\Notification;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::where('slug', 'united-kingdom')->first();
        $country_id = $country ? $country->id : null;

        $pro_stations = RadioList::where('featured', 1)->latest()->take(10)->get();



        $newest_stations = RadioList::orderBy('id','desc')->take(15)->get();

        $topStations = RadioList::where('count', '>', 0)
        ->orderByDesc('count')
        ->limit(15)
        ->Paginate(15);

        $notifications = Notification::latest()->take(5)->get();



        return view('frontend.index', compact('pro_stations','country_id','newest_stations','topStations','notifications'));

    }



    public function search(Request $request)
    {
        $query = $request->input('text');
        $countryId = $request->input('country_id');
        $genreId = $request->input('genre_id');
        $orderBy = $request->input('order_by', 'default');

        // dd($orderBy);

        $stations = RadioList::query();

        if ($query) {
            $stations->where('name', 'like', "%{$query}%");
        }

        if ($countryId) {
            $stations->where('country_id', $countryId);
        }

        if ($genreId) {
            $stations->where('genres_id', $genreId);
        }

        // Apply sorting based on the selected option
        switch ($orderBy) {
            case 'views':
                $stations->where('count','>',0); // Assuming 'count' is the column representing station popularity
                break;
            case 'name':
                $stations->orderBy('name','asc'); // Order by name in ascending order
                break;
            case 'default':
            default:
                $stations->latest(); // Default to newest (latest)
                break;
        }

        // dd($stations);
        $stations = $stations->paginate(20);

        return view('frontend.stations.search_results', compact('stations'));
    }


    public function privacy_policy()
    {
        return view('frontend.privacy');
    }



    public function faq()
    {
        return view('frontend.faq');
    }

    public function about_us()
    {
        return view('frontend.about-us');
    }
    public function help()
        {
            return view('frontend.help');
        }
 public function contact()
        {
            return view('frontend.contact');
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function broadcaster()
    {
        return view('frontend.broadcaster');
    }


    public function banners()
    {
        return view('frontend.banners');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

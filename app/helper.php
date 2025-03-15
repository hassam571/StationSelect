<?php
    use App\Models\App;
    use App\Models\Country;
    use App\Models\Genres;

    function isFileExist($request, $radio, $fileField, $destinationPath) {
        if ($request->hasFile($fileField)) {
            $fileName = time() . '.' . $request->$fileField->extension();
            $request->$fileField->move(public_path($destinationPath), $fileName);
            return $fileName;
        }
        return null;
    }


    function isFilesExist($requestFileName, $destinationPath)
    {
        $fileName = "";

        if ($file = uploadImage($requestFileName, $fileName, $destinationPath)) {
            return $file->getFileName();
        }

        return false;
    }

    function uploadImage(Illuminate\Http\UploadedFile $file, $fileName, $destinationPath)
    {
        $randomNumber = rand ( 10000 , 99999 );

        $filename = date('Y-m-d-h-i-s')."-". $randomNumber ."-". $fileName . '.' . $file->getClientOriginalExtension();

        return $file->move($destinationPath, $filename);
    }

    function getAppDetail()
    {
        $key = request()->hash;
        return App::where('key', $key)->value('id');
    }

    function baseUrl()
    {
        return "https://stationselect.com/";
    }

     function countries()
    {
        $countries = Country::pluck('name','id');
        return $countries;

    }

    function showCountries()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        return $countries;
    }

    function showGenres()
    {
        $genres = Genres::orderBy('name', 'asc')->get();
        return $genres;
    }

<?php

namespace App\Http\Services;
use App\Models\RadioList;
use App\Models\Category;
use App\Models\Country;

class RadioService
{
    public function create($data)
    {
        return RadioList::create($data);
    }

    public function update($radio , $data)
    {
        return $radio->update($data);
    }

    public function delete($radio)
    {
        return RadioList::destroy($radio->id);
    }

    public function updateFeatured($radio)
    {
        try {
            $radio->update(['featured' => 1]);
            return true;
        } catch (\Exception $e) {
            // Log or handle the exception as needed
            return false;
        }
    }

    public function removeFromFeatured($radio)
{
    try {
        $radio->update(['featured' => 0]);
        return true;
    } catch (\Exception $e) {
        // Log or handle the exception as needed
        return false;
    }
}


}

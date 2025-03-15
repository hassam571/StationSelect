<?php

namespace App\Http\Services;
use App\Models\SubCategory;

class SubCategoryService
{
    public function create($data)
    {
        return SubCategory::create($data);
    }

    public function update($subcategory , $data)
    {
        return $subcategory->update($data);
    }

    public function delete($subcategory)
    {
        return SubCategory::destroy($subcategory->id);
    }

}

<?php

namespace App\Http\Services;
use App\Models\Category;

class CategoryService
{
    public function create($data)
    {
        return Category::create($data);
    }

    public function update($category , $data)
    {
        return $category->update($data);
    }

    public function delete($category)
    {
        return Category::destroy($category->id);
    }

}

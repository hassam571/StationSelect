<?php

namespace App\Http\Repositories;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryRepository
{


    public function getFormData(SubCategory $subcategory)
    {
        // You can perform any additional operations here, such as fetching categories from the database
        $categories = Category::pluck('name', 'id');

        return [
            'subcategory' => $subcategory,
            'categories' => $categories, // Adding categories to the returned data
        ];
    }

    public function findAllApi()
    {
        $subcategories = SubCategory::select()->get();

        if(!$subcategories->isEmpty()) {
            return $this->mapData($subcategories);
        }

        return false;
    }

    public function find($id)
    {
        return SubCategory::find($id);
    }

    public function findAll()
    {
        return SubCategory::latest('id')->get();
    }


    public function mapData($data)
    {
        return $data->map(function($item) {
            return [
                "id" => $item->id,
                "title"=> $item->name ? $item->name : "",
            ];
        });
    }

}

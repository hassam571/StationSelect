<?php

namespace App\Http\Repositories;
use App\Models\Category;

class CategoryRepository
{


    public function getFormData(Category $category)
	{
        return [
           'category'		=> $category,
		];
	}


    public function findAllApi()
    {
        $categories = Category::select()->get();

        if(!$categories->isEmpty()) {
            return $this->mapData($categories);
        }

        return false;
    }


    public function pluck()
    {
        return Category::all();
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function findAll()
    {
        return Category::latest('id')->get();
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

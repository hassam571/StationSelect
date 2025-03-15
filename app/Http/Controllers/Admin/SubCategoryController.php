<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Repositories\SubCategoryRepository;
use App\Models\SubCategory;
use App\Models\Category;
use App\Http\Services\SubCategoryService;
use Laracasts\Flash\Flash;
use App\Http\Traits\ResponseTrait;

class SubCategoryController extends Controller
{
    use ResponseTrait;

    protected $subcategoryRepository;

    protected $categoryService;

    public function __construct(SubCategoryRepository $subcategoryRepository, SubCategoryService $subcategoryService)
    {
        $this->subcategoryRepository = $subcategoryRepository;

        $this->subcategoryService = $subcategoryService;
    }





    public function index()
    {
        $image = $this->subcategoryRepository->findAll();

        return view('admin.subcategory.index', compact('image'));
    }

    public function create(SubCategory $subcategory,Category $category)
    {
        $data = $this->subcategoryRepository->getFormData($subcategory,$category);

        return view('admin.subcategory.form', $data);
    }

    public function store(Request $request)
    {
        if($image = $this->subcategoryService->create($request->only('name','category_id'))) {

            Flash::success($this->success());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->route('admin.subcategory.index');
    }

    public function edit($id)
    {
        $category = $this->subcategoryRepository->find($id);

        $data = $this->subcategoryRepository->getFormData($category);

        return view('admin.subcategory.form', $data);
    }

    public function update(Request $request, $id)
    {
        $image = $this->subcategoryRepository->find($id);

        if($category = $this->subcategoryService->update($image, $request->only('name','category_id'))) {

            Flash::success($this->updated());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->route('admin.subcategory.index');

    }

    public function delete_subcategory($id)
    {
        $subcategory = SubCategory::find($id);

        // $category->radioList()->detach();
        if($subcategory->delete()) {

            Flash::success($this->deleted());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->back();

    }


    public function getSubCategories($categoryId)
    {
        $subCategories = SubCategory::where('category_id', $categoryId)->get();
        return response()->json($subCategories);
    }

}

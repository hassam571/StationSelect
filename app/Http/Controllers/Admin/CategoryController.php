<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Repositories\CategoryRepository;
use App\Models\Category;
use App\Http\Services\CategoryService;
use Laracasts\Flash\Flash;
use App\Models\SubCategory;
use App\Http\Traits\ResponseTrait;

class CategoryController extends Controller
{
    use ResponseTrait;

    protected $categoryRepository;

    protected $categoryService;

    public function __construct(CategoryRepository $categoryRepository, CategoryService $categoryService)
    {
        $this->categoryRepository = $categoryRepository;

        $this->categoryService = $categoryService;
    }





    public function index()
    {
        $image = $this->categoryRepository->findAll();

        return view('admin.category.index', compact('image'));
    }

    public function create(Category $category)
    {
        $data = $this->categoryRepository->getFormData($category);

        return view('admin.category.form', $data);
    }

    public function store(Request $request)
    {
        if($image = $this->categoryService->create($request->only('name'))) {

            Flash::success($this->success());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->route('admin.category.index');
    }

    public function edit($id)
    {
        $category = $this->categoryRepository->find($id);

        $data = $this->categoryRepository->getFormData($category);

        return view('admin.category.form', $data);
    }

    public function update(Request $request, $id)
    {
        $image = $this->categoryRepository->find($id);

        if($category = $this->categoryService->update($image, $request->only('name'))) {

            Flash::success($this->updated());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->route('admin.category.index');

    }

    public function destroy($id)
    {
        $category = $this->categoryRepository->find($id);

        // $category->radioList()->detach();
        if($this->categoryService->delete($category)) {

            Flash::success($this->deleted());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->back();

    }


    public function getSubcategories(Request $request)
    {
        $categoryId = $request->query('category_id');
        // dd($categoryId);
        $subcategories = SubCategory::where('category_id', $categoryId)->pluck('name', 'id');
        return response()->json($subcategories);
    }

}

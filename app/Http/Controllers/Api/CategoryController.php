<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Response;

class CategoryController
{
    public function index()
    {
        return CategoryResource::collection(Category::all())->resolve();
    }

    public function show(Category $category)
    {
        return CategoryResource::make($category)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $category = CategoryService::create($data);
        return CategoryResource::make($category)->resolve();
    }

    public function update(Category $category, UpdateRequest $request)
    {
        $data = $request->validated();
        $category = CategoryService::update($category, $data);
        return CategoryResource::make($category)->resolve();
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return CategoryService::delete($category)->response(
            [
                'message' => 'deleted successfully'
            ],
            Response::HTTP_OK
        );
    }
}

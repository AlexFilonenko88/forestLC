<?php

namespace App\Http\Controllers;

use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(Category::all())->resolve();
    }

    public function show(Category $category)
    {
        return CategoryResource::make($category)->resolve();
    }

    public function store()
    {
        return CategoryService::create();
    }

    public function update($category): array
    {
        return CategoryService::update($category);
    }

    public function destroy($category)
    {
        CategoryService::delete($category);
        return response(
            [
                'message' => 'deleted successfully'
            ],
            Response::HTTP_OK
        );
    }
}

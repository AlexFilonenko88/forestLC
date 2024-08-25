<?php

namespace App\Services;

use App\Http\Requests\Category\UpdateRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;

class CategoryService
{
    /**
     * Create a new class instance.
     */
    public static function create(array $data): Category
    {
//        $data = [
//            "id" => 5,
//            "title" => "Test-4"
//        ];

        return Category::create($data);
    }

    public static function update(Category $category, array $data): Category
    {
        return $category->update($data);
    }

    public static function delete($id): Category
    {
        $category = Category::find($id);

        return $category->delete();
    }
}

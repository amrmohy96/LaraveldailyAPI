<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $cats = Category::select('id','name')->get();
        return CategoryResource::collection($cats);
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

}

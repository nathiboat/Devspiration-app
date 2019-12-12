<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(
          Category::orderBy('title', 'asc')->get()
        );
    }
}

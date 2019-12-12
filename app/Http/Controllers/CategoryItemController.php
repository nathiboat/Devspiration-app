<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\ItemResource;
use Illuminate\Http\Request;

class CategoryItemController extends Controller
{
    public function index(Category $category)
    {
        return ItemResource::collection(
            $category->items()->latest()->get()
        );

    }
}

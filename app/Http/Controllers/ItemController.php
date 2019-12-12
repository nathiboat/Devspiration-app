<?php

namespace App\Http\Controllers;

use App\Http\Resources\ItemResource;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show(Item $item)
    {
        return new ItemResource($item);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $data = $categories->map(function ($item) {
            return [
                'id' => $item->id,
                'name' => $item->name,
            ];
        });
        return response()->json($data);
    }
}

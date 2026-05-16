<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        $name = request()->query('name');
        $products = Product::with('category')->when($name, function ($query) use ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        })->latest('created_at')->get();
        $data = $products->map(function ($item) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'description' => $item->description,
                'price' => (float) $item->price,
                'stock' => (int) $item->stock,
                'image' => env('APP_URL') . Storage::url('products/' . $item->image),
                'category_id' => $item->category->name,
            ];
        });
        return response()->json($data);
    }
    public function show($id)
    {
        $item = Product::findOrFail($id);
        $data = [
            'id' => $item->id,
            'name' => $item->name,
            'description' => $item->description,
            'price' => (float) $item->price,
            'stock' => (int) $item->stock,
            'image' => env('APP_URL') . Storage::url('products/' . $item->image),
            'category_id' => $item->category->name,
        ];
        return response()->json($data);
    }
}

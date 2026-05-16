<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest('created_at')->get();
        return view('pages.admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'category_id' => 'required|exists:categories,id',
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'stock' => 'required|integer|min:0',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4192',
                'description' => 'nullable|string',
            ]);
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imageName = time() . '.' . str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('products', $imageName, 'public');
                $data['image'] = $imageName;
            }
            Product::create($data);
            return to_route('admin.products.index')->with('success', 'Product created successfully');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('pages.admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $product = Product::findOrFail($id);
            $data = $request->validate(
                [
                    'category_id' => 'required|exists:categories,id',
                    'name' => 'required|string|max:255',
                    'price' => 'required|numeric|min:0',
                    'stock' => 'required|integer|min:0',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'description' => 'nullable|string',
                ],

            );

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imageName = time() . '.' . str_replace(' ', '_', $file->getClientOriginalName());
                $file->storeAs('products', $imageName, 'public');
                $data['image'] = $imageName;
            } else {
                $data['image'] = $product->image;
            }
            $product->update($data);
            return to_route('admin.products.index')->with('success', 'Product updated successfully');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            return to_route('admin.products.index')->with('successDelete', 'Product deleted successfully');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}

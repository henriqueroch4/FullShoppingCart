<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->orderBy('name')->get();
        return view('products.index', compact('products'));    
    }
    public function create(Category $categories)
    {
        $categories=Category::query()->orderBy('name')->get();
        return view('products.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $category = Category::find($request->category_id);
        
        $data = $request->except('_token', 'image');
        $path = Storage::putFile('product_image', $request->file('image'));
        
        $save = $category->products()->create([
            'name'=>$data['name'],
            'price'=>$data['price'],
            'image_url'=>$path
        ]);

        return redirect()->route('/produtos')->get();
    
    }
    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();

        return redirect()->back();
    }
    public function seeMore(int $productId)
    {
        $product = Product::find($productId);

        return view('products.more', compact('product'));
    }
}

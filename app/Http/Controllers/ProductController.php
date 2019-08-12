<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Repositories\ImageRepository;
use App\Category;

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
    public function store(Request $request, ImageRepository $repo)
    {
        dd($request);
        $product = Product::create($request->except('_token'));

        dd($product);
        
        if ($request->hasFile('image')) {
            $product->path_image = $repo->saveImage($request->image, $product->id, 'products', 250);
        }
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()->orderBy('name')->get();
        $category = Category::class;
        $message = $request->session()->get('message');
        return view('products.index', compact('products', 'category', 'message'));    
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
        
        $product = $category->products()->create([
            'name'=>$data['name'],
            'price'=>$data['price'],
            'image_url'=>$path
        ]);

        $request->session()->flash('message', "Produto {$product->name} criado");
        return redirect()->route('products.index');
    
    }
    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();

        $request->session()->flash('message', "Produto {$product->name} deletado");
        return redirect()->route('products.index');
    }
    public function info(int $productId)
    {   
        $product = Product::find($productId);
        $categories = Category::query()->orderBy('id')->get();
        $productCategory = $categories->find($product->category_id);
        
        return view('products.info', compact('product', 'categories', 'productCategory'));
    }
    
    public function update(Request $request, int $productId){
        
        $data = $request->except('_token', 'image');
        
        $product = Product::find($productId);
        $product->update($data);
        if(($request->image)){
            $path = Storage::putFile('product_image', $request->file('image'));
            $product->update([
                'image_url'=>$path
            ]);
        }
        
        return redirect()->back();
    }
}

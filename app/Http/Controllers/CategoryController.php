<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::query()->orderBy('name')->get();

        return view('categories.index', compact('categories'));
    }

    public function createCategory()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $nome = $request->input('name');
        $categoria = Category::create(['name'=>$nome]);
        return redirect()->route('index.categorias');
    }
}

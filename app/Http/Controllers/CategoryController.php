<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::query()->orderBy('name')->get();
        $message = $request->session()->get('message');

        return view('categories.index', compact('categories', 'message'));
    }

    public function createCategory()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $nome = $request->input('name');
        $categoria = Category::create(['name'=>$nome]);
        $request->session()->flash('message', "Categoria {$categoria->name} criada");
        return redirect()->route('index.categorias');
    }

    public function delete(Request $request)
    {
        $categoria = Category::find($request->id);
        $nomeCategoria = $categoria->name;
        $categoria->delete();

        $request->session()->flash('message', "Categoria {$nomeCategoria} deletada");
        return redirect()->route('index.categorias');
    }
}

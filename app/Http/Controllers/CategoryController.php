<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('categories.index');
    }

    public function createCategory()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
}

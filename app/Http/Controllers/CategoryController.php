<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function show(Request $request,$locale, Category $category, )
    {
        $products = Product::where('category_id', $category->id)->get();
    
        return view('categories.show', compact('category', 'products'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $imageName = null;

        if ($request->hasFile('image_path')) {
            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('images/categories/'), $imageName);
        }
        Category::create([
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'image_path' => $imageName ? '/images/categories/' . $imageName : null,
            'image_name' => $imageName,
        ]);

        return redirect()->route('categories.index')
                         ->with('success', __('Категория создана.'));
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));

    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $imageName = $category->image_name;
        
        if ($request->hasFile('image_path')) {
            if ($category->image_name) {
                unlink(public_path('/images/categories/' . $category->image_name));
            }

            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('/images/categories'), $imageName);
        }
        $category->update([
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'image_path' => $imageName ? '/images/categories/' . $imageName : null,
            'image_name' => $imageName,
        ]);

        return redirect()->route('categories.index')
                         ->with('success', __('Категория обновлена.'));
    }

    public function destroy(Category $category)
    {
        if ($category->image_name) {
            unlink(public_path('images/categories/' . $category->image_name));
        }
        $category->delete();

        return redirect()->route('categories.index')
                         ->with('success', __('Категория удалена.'));
    }
}

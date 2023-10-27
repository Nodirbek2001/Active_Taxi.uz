<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'required',
            'description_uz' => 'required',
            'description_ru' => 'required',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);
    
        $imageName = null;

        if ($request->hasFile('image_path')) {
            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('images/news/'), $imageName);
        }    
        News::create([
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'image_path' => $imageName ? '/images/news/' . $imageName : null,
            'image_name' => $imageName,        ]);
    
        return redirect()->route('news.index')
            ->with('success', 'News created successfully.');
    }

    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
{
    $request->validate([
        'name_ru' => 'required|string|max:255',
        'name_uz' => 'required|string|max:255',
        'description_ru' => 'required|string',
        'description_uz' => 'required|string',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
    ]);

    $news->name_ru = $request->get('name_ru');
    $news->name_uz = $request->get('name_uz');
    $news->description_ru = $request->get('description_ru');
    $news->description_uz = $request->get('description_uz');

    if ($request->file('image_path')) {
        // Old image removal
        if ($news->image_name) {
            unlink(public_path($news->image_path));
        }

        $imageName = time() . '.' . $request->file('image_path')->getClientOriginalExtension();
        $request->file('image_path')->move(public_path('images/news'), $imageName);
        $news->image_name = $imageName;
        $news->image_path = 'images/news/' . $imageName;
    }

    $news->save();

    return redirect()->route('news.index')
        ->with('success', 'News updated successfully.');
}

    public function destroy(News $news)
    {
        if ($news->image_path && file_exists(public_path($news->image_path))) {
            unlink(public_path($news->image_path));
        }
        $news->delete();

        return redirect()->route('news.index')
            ->with('success', 'News deleted successfully.');
    }
}

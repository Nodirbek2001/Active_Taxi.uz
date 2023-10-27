<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {

        return view('admin.services.create');
    }

    public function store(Request $request)
{
    $request->validate([
        // validatsiya qoidalarini yangilaymiz
        'name_ru' => 'required|string|max:255',
        'name_en' => 'required|string|max:255',
        'description_ru' => 'required|string',
        'description_en' => 'required|string',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
    ]);

    $imageName = null;

    if ($request->hasFile('image_path')) {
        $imageName = time() . '.' . $request->image_path->extension();
        $request->image_path->move(public_path('images/services'), $imageName);
    }

    service::create([
        'name_ru' => $request->name_ru,
        'name_en' => $request->name_en,
        'description_ru' => $request->description_ru,
        'description_en' => $request->description_en,
        'image_path' => $imageName ? '/images/services/' . $imageName : null,
        'image_name' => $imageName,
    ]);

    return redirect()->route('services.index')
        ->with('success', __('Продукт создан.'));
}
public function show(service $service)
{
    return view('admin.services.show', compact('service'));
}
    public function edit(service $service)
    {

        return view('admin.services.edit', compact('service'));
    }
    public function update(Request $request, service $service)
{
    $request->validate([
        // validatsiya qoidalarini yangilaymiz
        'name_ru' => 'required|string|max:255',
        'name_en' => 'required|string|max:255',
        'description_ru' => 'required|string',
        'description_en' => 'required|string',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
    ]);

    if ($request->hasFile('image_path')) {
        // Old image removal
        if ($service->image_name && file_exists(public_path($service->image_path))) {
            unlink(public_path($service->image_path));
        }

        $imageName = time() . '.' . $request->image_path->extension();
        $request->image_path->move(public_path('images/services'), $imageName);
        $service->image_name = $imageName;
        $service->image_path = '/images/services/' . $imageName;
    }

    $service->name_ru = $request->name_ru;
    $service->name_en = $request->name_en;
    $service->description_ru = $request->description_ru;
    $service->description_en = $request->description_en;

    $service->save();

    return redirect()->route('services.index')
        ->with('success', __('Товар обновлен.'));
}

    
    public function destroy(service $service)
    {
        if ($service->image_path && file_exists(public_path($service->image_path))) {
            unlink(public_path($service->image_path));
        }
    
        $service->delete();
    
        return redirect()->route('services.index')
            ->with('success', __('Товар удален.'));
    }
}
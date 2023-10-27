<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ru' => 'required',
            'description_en' => 'required',
            'description_ru' => 'required',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102400',
        ]);
    
        $imageName = null;

        if ($request->hasFile('image_path')) {
            $imageName = time() . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('images/projects/'), $imageName);
        }    
        Project::create([
            'name_en' => $request->name_en,
            'name_ru' => $request->name_ru,
            'description_en' => $request->description_en,
            'description_ru' => $request->description_ru,
            'image_path' => $imageName ? '/images/projects/' . $imageName : null,
            'image_name' => $imageName,        ]);
    
        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
{
    $request->validate([
        'name_ru' => 'required|string|max:255',
        'name_en' => 'required|string|max:255',
        'description_ru' => 'required|string',
        'description_en' => 'required|string',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102400',
    ]);

    $project->name_ru = $request->get('name_ru');
    $project->name_en = $request->get('name_en');
    $project->description_ru = $request->get('description_ru');
    $project->description_en = $request->get('description_en');

    if ($request->file('image_path')) {
        // Old image removal
        if ($project->image_name) {
            unlink(public_path($project->image_path));
        }

        $imageName = time() . '.' . $request->file('image_path')->getClientOriginalExtension();
        $request->file('image_path')->move(public_path('images/projects'), $imageName);
        $project->image_name = $imageName;
        $project->image_path = 'images/projects/' . $imageName;
    }

    $project->save();

    return redirect()->route('projects.index')
        ->with('success', 'Project updated successfully.');
}

    public function destroy(Project $project)
    {
        if ($project->image_path && file_exists(public_path($project->image_path))) {
            unlink(public_path($project->image_path));
        }
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
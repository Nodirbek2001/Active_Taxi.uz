<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\TransliterationTrait;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    use TransliterationTrait;

    public function index()
    {
        $contacts = Contact::latest()->take(1)->get();

        $projects = Project::all();

        return view('projects.index', compact('projects', 'contacts'));
    }
    public function show($locale, $project_name) {
        $contacts = Contact::latest()->take(1)->get();

        // Slugni original nomga o'zgartirish
        $projectRealName = $this->getModelNameFromSlug($locale, $project_name);
        
        // Slug va asl nomni logga yozish
        Log::info('Converted Slug to Real Name:', ['slug' => $project_name, 'real_name' => $projectRealName]);
    
        // Ushbu asli nom asosida ma'lumotlar bazasidan loyihani topish
        $project = Project::where('name_' . $locale, $projectRealName)->first();
    
        // Agar loyiha topilmasa, logga xatolikni yozish
        if (!$project) {
            Log::error('Project not found for name:', ['name' => $projectRealName]);
            abort(404);
        }
    
        return view('projects.show', compact('project', 'contacts'));
    }
    
    
    
    
    
    
    
}

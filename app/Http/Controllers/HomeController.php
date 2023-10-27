<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\News;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
{
    $services = Service::latest()->take(3)->get();
    $projects = Project::latest()->take(3)->get();
    $news = News::latest()->take(3)->get();
    $contacts = Contact::latest()->take(1)->get();

    return view('home', compact('services','projects','news', 'contacts'));
}
public function show(Request $request, Project $project)
{
    return view('projects.show', compact('project'));

}

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\TransliterationTrait;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller {

    use TransliterationTrait;

    public function index() {
        
        $services = Service::all();

        $contacts = Contact::latest()->take(1)->get();

        return view('services.index', compact('services', 'contacts'));

    }

    public function show(Request $request, $locale, $service_name) {
        $contacts = Contact::latest()->take(1)->get();

        $serviceName = $this->getModelNameFromSlug($locale, $service_name, 'Service');
        $service = Service::where('name_' . $locale, $serviceName)->firstOrFail();
        return view('services.show', compact('service', 'contacts'));
    }
    
}

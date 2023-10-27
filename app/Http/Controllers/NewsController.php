<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\TransliterationTrait;
use App\Models\Contact;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class newsController extends Controller
{
    use TransliterationTrait;
    public function index()
    {
        $contacts = Contact::latest()->take(1)->get();

        return view('news.index', compact('news', 'contacts'));
    }
    public function slugToName($slug) {
        return str_replace('-', ' ', $slug);
    }
    
    public function show( $locale, $news_name)
    {
        // Til almashtirish funksiyasi kodlari
        $contacts = Contact::latest()->take(1)->get();

        $newsRealName = $this->getModelNameFromSlug($locale, $news_name);
        
        // Slug va asl nomni logga yozish
        Log::info('Converted Slug to Real Name:', ['slug' => $news_name, 'real_name' => $newsRealName]);
    
        // Ushbu asli nom asosida ma'lumotlar bazasidan loyihani topish
        $news = News::where('name_' . $locale, $newsRealName)->first();
    
        // Agar loyiha topilmasa, logga xatolikni yozish
        if (!$news) {
            Log::error('news not found for name:', ['name' => $newsRealName]);
            abort(404);
        }
    
        return view('news.show', compact('news', 'contacts'));
    }
}

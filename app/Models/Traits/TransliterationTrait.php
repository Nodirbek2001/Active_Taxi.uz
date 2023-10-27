<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\Log;
use voku\helper\ASCII;
use Illuminate\Support\Str;

trait TransliterationTrait {

    public function transliterateWithProtectedQuotes($text) {
        $protectedParts = [];
        
        // 1. Qavslarni topib olish va ulardagi ma'lumotni saqlash
        if (preg_match_all('/\{([a-zA-Z0-9\s]+)\}/', $text, $matches)) {
            foreach ($matches[1] as $index => $match) {
                $key = "<protected_{$index}>";
                $protectedParts[$key] = $match;
                $text = str_replace("{" . $match . "}", $key, $text);
            }
        }
    
        // 2. Tushuntirishni bajarish
        $transliteratedText = $this->cyrillicToLatin($text);
    
        // 3. Saqlangan qavslarni qayta qo'shish
        foreach ($protectedParts as $key => $value) {
            $transliteratedText = str_replace($key, $value, $transliteratedText);
        }
    
        return $transliteratedText;
    }
    
    public function cyrillicToLatin($text) {
        $trans = array(
            "А"=>"a", "Б"=>"b", "В"=>"v", "Г"=>"g", "Д"=>"d",
    "Е"=>"YE", "Ё"=>"YO", "Ж"=>"zh", "З"=>"z", "И"=>"i", 
    "Й"=>"j", "К"=>"k", "Л"=>"l", "М"=>"m", "Н"=>"n", 
    "О"=>"o", "П"=>"p", "Р"=>"r", "С"=>"s", "Т"=>"t", 
    "У"=>"u", "Ф"=>"f", "Х"=>"kh", "Ц"=>"ts", "Ч"=>"ch", 
    "Ш"=>"sh", "Щ"=>"sch",  "Ы"=>"y",  
    "Э"=>"e", "Ю"=>"yu", "Я"=>"ya", "а"=>"a", "б"=>"b", 
    "в"=>"v", "г"=>"g", "д"=>"d", "е"=>"ye", "ё"=>"yo", 
    "ж"=>"zh", "з"=>"z", "и"=>"i", "й"=>"j", "к"=>"k", 
    "л"=>"l", "м"=>"m", "н"=>"n", "о"=>"o", "п"=>"p", 
    "р"=>"r", "с"=>"s", "т"=>"t", "у"=>"u", "ф"=>"f", 
    "х"=>"kh", "ц"=>"ts", "ч"=>"ch", "ш"=>"sh", "щ"=>"sch", 
    "ъ"=>"", "ы"=>"y",  "э"=>"e", "ю"=>"yu", 
    "я"=>"ya", " "=>"-", "."=>"", ","=>"", "/"=>"-",  
    ":"=>"", ";"=>"",  "Ь"=>"h",
        "-" => "-ps-"
            // boshqa harflar...
        );
        return strtr($text, $trans);
    }
    
    public function getSlugAttribute() {
        $name = $this->{'name_' . app()->getLocale()};
    
        // {latin so'z} formatidagi barcha so'zlarni o'zgartirmasdan saqlash
        $name = $this->transliterateWithProtectedQuotes($name);
    
        return Str::slug($name);
    }

}
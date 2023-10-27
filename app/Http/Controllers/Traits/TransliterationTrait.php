<?php

namespace App\Http\Controllers\Traits;

trait TransliterationTrait {

    public function latinToCyrillic($text) {
        $trans = array(
            "A"=>"А", "B"=>"Б", "V"=>"В", "G"=>"Г", "D"=>"Д",
            "Ye"=>"Е", "Yo"=>"Ё", "Zh"=>"Ж", "Z"=>"З", "I"=>"И", 
            "J"=>"Й", "K"=>"К", "L"=>"Л", "M"=>"М", "N"=>"Н", 
            "O"=>"О", "P"=>"П", "R"=>"Р", "S"=>"С", "T"=>"Т", 
            "U"=>"У", "F"=>"Ф", "Kh"=>"Х", "Ts"=>"Ц", "Ch"=>"Ч", 
            "Sh"=>"Ш", "Sch"=>"Щ", "Y"=>"Ы", 
            "E"=>"Э", "Yu"=>"Ю", "Ya"=>"Я",
            
            "a"=>"а", "b"=>"б", "v"=>"в", "g"=>"г", "d"=>"д",
            "ye"=>"е", "yo"=>"ё", "zh"=>"ж", "z"=>"з", "i"=>"и", 
            "j"=>"й", "k"=>"к", "l"=>"л", "m"=>"м", "n"=>"н", 
            "o"=>"о", "p"=>"п", "r"=>"р", "s"=>"с", "t"=>"т", 
            "u"=>"у", "f"=>"ф", "kh"=>"х", "ts"=>"ц", "ch"=>"ч", 
            "sh"=>"ш", "sch"=>"щ", "y"=>"ы", 
            "e"=>"э", "yu"=>"ю", "ya"=>"я", 
            "-" => " ", "-ps-" => "-", "-ii-" => "Ь"
        );
        
        return strtr($text, $trans);
    }
    
    public function nameToSlug($name) {
        // "—" (uzun defis) belgisini "_" bilan almashtirish va bo'sh joylarni "-" bilan almashtirish
        return str_replace([' ', '—'], ['-', '_'], $name);
    }
    
    public function slugToName($slug) {
        // "-" belgisi bilan bo'sh joy almashtirish, so'ngra "_" belgisini "—" belgisi bilan almashtirish
        return str_replace(['-', '_'], [' ', '—'], $slug);
    }
    
    public function getModelNameFromSlug($locale, $slug) {
        if ($locale == "ru") {
            return $this->latinToCyrillic($slug);
        }
        return $slug;
    }
    
    
    
    

     
    
}
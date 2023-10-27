<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\TransliterationTrait;

class Service extends Model
{
    use HasFactory, TransliterationTrait;
    
    protected $fillable = [
        'name_ru',
        'name_en',
        'description_ru',
        'description_en',
        'image_path',
        'image_name',
    ];  
}

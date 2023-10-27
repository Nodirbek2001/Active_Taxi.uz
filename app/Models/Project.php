<?php

namespace App\Models;

use App\Models\Traits\TransliterationTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
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

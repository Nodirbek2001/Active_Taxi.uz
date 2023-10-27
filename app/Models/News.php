<?php

namespace App\Models;

use App\Models\Traits\TransliterationTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory, TransliterationTrait;

    protected $fillable = [
        'name_ru',
        'name_uz',
        'description_ru',
        'description_uz',
        'image_path',
        'image_name',
    ];

   
}

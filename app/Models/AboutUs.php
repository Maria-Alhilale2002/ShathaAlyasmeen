<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
     protected $fillable = [
        'page_title',
        'page_description',

        'about_paragraph1',
        'about_paragraph2',

        'vision_icon',
        'vision_text',

        'mission_icon',
        'mission_text',
    ];
}

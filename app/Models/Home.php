<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'hero_video_link',
        'hero_video_file',
        'hero_title',
        'hero_description',
        'hero_btn1',
        'hero_btn1_link',
        'hero_btn2',
        'hero_btn2_link',

        'feature1_icon',
        'feature1_title',
        'feature1_description',

        'feature2_icon',
        'feature2_title',
        'feature2_description',

        'feature3_icon',
        'feature3_title',
        'feature3_description',

        'section_services_title',
        'section_services_description',

        'services_icon1',
        'services_title1',
        'services_description1',

        'services_icon2',
        'services_title2',
        'services_description2',

        'services_icon3',
        'services_title3',
        'services_description3',

        'services_icon4',
        'services_title4',
        'services_description4',

        'services_icon5',
        'services_title5',
        'services_description5',

        'services_icon6',
        'services_title6',
        'services_description6',
    ];
}

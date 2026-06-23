<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $fillable = [
        'city',
        'address',
        'phone1',
        'phone2',
        'email1',
        'email2',
        'whatsapp',
    ];
}

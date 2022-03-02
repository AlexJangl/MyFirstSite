<?php

namespace App\Models;

use App\Traits\AddEdit;
use App\Traits\Translates;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasFactory;

    //use AddEdit, Translates;

    protected $fillable = [
        'key','title_ru','title_ua',
    ];
}


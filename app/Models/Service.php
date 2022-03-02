<?php

namespace App\Models;

use App\Traits\AddEdit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    use AddEdit;
    protected $table = 'servises';
    protected $fillable= ['title', 'icon', 'description'];
}

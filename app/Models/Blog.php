<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;





    public function up_title($limit = 10, $end = ' ...')
    {
        $up_title = Str::limit($this->title, $limit, $end);
        $up_title  =  Str::upper($up_title);
        return $up_title;

    }
}

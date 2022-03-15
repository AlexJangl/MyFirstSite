<?php

namespace App\Models;

use App\Traits\AddEdit;
use App\Traits\UploadImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory, Notifiable;
    use AddEdit, UploadImage;


    protected $fillable= ['title', 'images', 'text'];
    protected $casts= [
        'images'=>'array'
    ];


    public function up_title($limit = 10, $end = ' ...')
    {
        $up_title = Str::limit($this->title, $limit, $end);
        $up_title  =  Str::upper($up_title);
        return $up_title;
    }

}

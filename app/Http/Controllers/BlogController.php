<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = [
            [
                'image' => 'images/blog3.jpg',
                'header' => 'Great results are charming and beautiful',
                'date' => '03 March 2020',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur explicabo nobis soluta praesentium deserunt magnam voluptatum'
            ],
            [
                'image' => 'images/blog2.jpg',
                'header' => 'Have a machine that is reliable and fast',
                'date' => '11 April 2020',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur explicabo nobis soluta praesentium deserunt magnam voluptatum'
            ],
            [
                'image' => 'images/blog1.jpg',
                'header' => 'We have been working on a big project',
                'date' => '21 July 2020',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur explicabo nobis soluta praesentium deserunt magnam voluptatum'
            ],
            [
                'image' => 'images/blog3.jpg',
                'header' => 'Great results are charming and beautiful',
                'date' => '03 March 2020',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur explicabo nobis soluta praesentium deserunt magnam voluptatum'
            ],
            [
                'image' => 'images/blog2.jpg',
                'header' => 'Have a machine that is reliable and fast',
                'date' => '11 April 2020',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur explicabo nobis soluta praesentium deserunt magnam voluptatum'
            ],
            [
                'image' => 'images/blog1.jpg',
                'header' => 'We have been working on a big project',
                'date' => '21 July 2020',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur explicabo nobis soluta praesentium deserunt magnam voluptatum'
            ],
            [
                'image' => 'images/blog3.jpg',
                'header' => 'Great results are charming and beautiful',
                'date' => '03 March 2020',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur explicabo nobis soluta praesentium deserunt magnam voluptatum'
            ],
            [
                'image' => 'images/blog2.jpg',
                'header' => 'Have a machine that is reliable and fast',
                'date' => '11 April 2020',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur explicabo nobis soluta praesentium deserunt magnam voluptatum'
            ],
            [
                'image' => 'images/blog1.jpg',
                'header' => 'We have been working on a big project',
                'date' => '21 July 2020',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur explicabo nobis soluta praesentium deserunt magnam voluptatum'
            ],
        ];
        return view('pages.blog.blog', compact('blogs'));
    }
}

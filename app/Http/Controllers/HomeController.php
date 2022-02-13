<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'icon' => 'fa fa-building',
                'header' => 'Building',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quisquam maxime eos, culpa minus placeat.'
            ],
            [
                'icon' => 'fa fa-dumbbell',
                'header' => 'Architecture',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quisquam maxime eos, culpa minus placeat.'
            ],
            [
                'icon' => 'fa fa-wrench',
                'header' => 'Renovation',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quisquam maxime eos, culpa minus placeat.'
            ],
        ];
        $works = [
            [
                'image' => 'images/work1.jpg',
                'header' => 'Building Bridge',
                'content' => 'Construction'
            ],
            [
                'image' => 'images/work2.jpg',
                'header' => 'Building Home',
                'content' => 'Construction'
            ],
            [
                'image' => 'images/work3.jpg',
                'header' => 'Building Home',
                'content' => 'Construction'
            ],
            [
                'image' => 'images/work4.jpg',
                'header' => 'Building House',
                'content' => 'Construction'
            ],
            [
                'image' => 'images/work5.jpg',
                'header' => 'Building Home',
                'content' => 'Construction'
            ],
            [
                'image' => 'images/work6.jpg',
                'header' => 'Building Home',
                'content' => 'Construction'
            ],
        ];
        $features = [
            [
                'icon' => 'fa fa-fire',
                'header' => 'Repair if there is damage',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Amet perspiciatis fuga repellendus similique quod obcaecati.'
            ],
            [
                'icon' => 'fa fa-calendar',
                'header' => 'Controling every month',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Amet perspiciatis fuga repellendus similique quod obcaecati.'
            ],
            [
                'icon' => 'fa fa-cog',
                'header' => 'Strong and durable',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Amet perspiciatis fuga repellendus similique quod obcaecati.'
            ],
            [
                'icon' => 'fa fa-comments',
                'header' => 'Free consultation',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Amet perspiciatis fuga repellendus similique quod obcaecati.'
            ],
        ];
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
        ];

        return view( 'pages.home.index', compact('services', 'works', 'features','blogs'));
    }

    public function contact(){
        return view( 'pages.home.contact');
    }
}

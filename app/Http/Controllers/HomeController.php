<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::oldest()->take(3)->get(['title', 'icon', 'description']);

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
        $blogs = Blog::take(3)
            ->get();
        return view( 'pages.home.index', compact('services', 'works', 'features','blogs'));
    }

    public function contact(){
        return view( 'pages.home.contact');
    }
//    public function index(){

//        return view('pages.services.index', compact('services'));
//    }
}

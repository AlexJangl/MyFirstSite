<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
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
        return view('pages.abouts.index', compact('features'));
    }
}

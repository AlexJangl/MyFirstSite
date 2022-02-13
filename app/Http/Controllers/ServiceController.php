<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
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
            [
                'icon' => 'fa fa-door-open',
                'header' => 'Repair Door',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quisquam maxime eos, culpa minus placeat.'
            ],
            [
                'icon' => 'fa fa-spa',
                'header' => 'Water Fountain',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quisquam maxime eos, culpa minus placeat.'
            ],
            [
                'icon' => 'fa fa-cog',
                'header' => 'Maintenance',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quisquam maxime eos, culpa minus placeat.'
            ],
        ];
        return view('pages.services.services', compact('services'));
    }
}

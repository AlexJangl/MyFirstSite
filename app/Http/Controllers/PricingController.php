<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = [
            [
                'title' => 'Architecture',
                'price' => '$550'
            ],
            [
                'title' => 'Building',
                'price' => '$980'
            ],
            [
                'title' => 'Renovation',
                'price' => '$400'
            ],

        ];
        $pricings_li = [
            'Consultating',
            'Revision',
            'Support Unlimited',
            'Cloud Hosting',
            'Free Ebook',
            'Tshirt Comunity',
            'Online Tutorial',
            'and Many More'
        ];
        return view('pages.pricing.pricing', compact('pricings', 'pricings_li'));
    }
}

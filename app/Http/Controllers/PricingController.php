<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PricingController extends Controller
{
    public function index()
    {
        $pricingQuery = Pricing::orderBy('title');
        if (Route::is('pricings.index'))
        {
            $pricings = $pricingQuery->take(3)->get();
            return view('pages.pricings.index', compact('pricings'));
        }
        $pricings = $pricingQuery->get();
        return view('admin.pricings.index', compact('pricings'));
    }

    public function create()
    {
        return view('admin.pricings.credit');
    }

    public function store(Request $request)
    {
        $pricing= Pricing::add($request->all());
        $pricing->save();
        return redirect()->route('admin.pricings.index')->with('massage', 'it is Ok');
    }

    public function show(Pricing $pricing)
    {
        //
    }

    public function edit(Pricing $pricing)
    {
        $item = $pricing;
        return view('admin.pricings.credit', compact('item'));
    }

    public function update(Request $request, Pricing $pricing)
    {
        $pricing-> edit($request->all());
        $pricing->save();
        return back()->with('massage', 'it is Ok');
    }

    public function destroy(Pricing $pricing)
    {
        //
    }
}

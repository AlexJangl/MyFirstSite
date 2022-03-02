<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;


class ServiceController extends Controller
{
    public function index()
    {
        $servicesQuery = Service::orderBy('title');
        if (Route::is('service.index'))
        {
            $services = $servicesQuery->take(6)->get();
            return view('pages.services.index', compact('services'));
        }
        $services = $servicesQuery->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        //dd(Schema::connection('mysql')->hasColumn('servises', 'id'));
        return view('admin.services.credit');
    }

    public function store(Request $request)
    {
        $service = Service::add($request->all());
        //$service->admin = Auth::id();
        $service->save();
        return redirect()->route('service.index')->with('massage', 'it is Ok');
    }

    public function show(Service $service)
    {
        //
    }

    public function edit(Service $service)
    {
        $item = $service;
        return view('admin.services.credit', compact('item'));
    }

    public function update(Request $request, Service $service)
    {
        $service -> edit($request->all());
        //$service->admin = Auth::id();
        $service->save();
        return back()->with('massage', 'it is Ok');
    }

    public function destroy(Service $service)
    {
        //
    }
}

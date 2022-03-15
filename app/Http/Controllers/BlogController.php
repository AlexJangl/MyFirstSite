<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{


    public function index()
    {
        $blogQuery = Blog::orderBy('title');
        if (Route::is('blogs.index'))
        {
            $blogs= $blogQuery->take(9)->get();
            return view('pages.blogs.index', compact('blogs'));
        }
        $blogs = $blogQuery->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.credit');
    }

    public function store(Request $request)
    {
        $blog= Blog::add($request->all());
        $blog->uploadImages($request->images);
        $blog->save();
        return redirect()->route('admin.blogs.index')->with('massage', 'it is Ok');
    }

    public function show(Blog $blog)
    {
        //
    }

    public function edit(Blog $blog)
    {
        $item = $blog;
        return view('admin.blogs.credit', compact('item'));
    }

    public function update(Request $request, Blog $blog)
    {
        $blog-> edit($request->all());
        $blog->uploadImages($request->images);
        $blog->save();
        return back()->with('massage', 'it is Ok');
    }

    public function destroy(Blog $blog)
    {
        //
    }
}

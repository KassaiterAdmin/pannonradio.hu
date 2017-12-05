<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogpost;
use Carbon\Carbon;

class BlogpostController extends Controller
{
    public function index()
    {
        $blogposts = blogpost::all();

        return view('blogposts.list',compact('blogposts'));
    }

    public function show(blogpost $slug)
    {
        return view('blogposts.single',compact('slug'));
    }
}

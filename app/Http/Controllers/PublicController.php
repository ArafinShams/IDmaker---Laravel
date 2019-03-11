<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function idcard()
    {
        return view('createidcard');
    }
    public function createid(Request $request)
    {
        var_dump($request->all());
    }
}

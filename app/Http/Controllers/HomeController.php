<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct() {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home');
    }

    public function contacts() {
        return view('contacts');
    }

    public function post($slug)
    {
        $data['page'] = Page::where('slug', $slug)->firstOrFail();
        return view('post', $data);
    }
}

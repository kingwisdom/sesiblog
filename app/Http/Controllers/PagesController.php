<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('pages.about');
    }

    public function ads(){
        return view('pages.ads');
    }
    public function faq(){
        return view('pages.faq');
    }
}

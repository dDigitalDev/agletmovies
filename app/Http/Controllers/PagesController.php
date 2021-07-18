<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{
    public function index(){
        $title = '';
        return view('pages.index', compact('title'));
    }

    public function favourite(){
        $title = 'Favourite Movies!';
        return view('pages.favourite')->with('title', $title);
    }

    public function contact(){
        $title='';
        return view('pages.contact');
    }

    public function login(){
        $title = 'Thank you welcome to your favourite movies';
        return view('pages.login')->with('title', $title);
    }
}

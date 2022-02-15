<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller
{
    public function index(){
        App::setlocale($locale);
        $books = ebook::all();
        return view('home',['books'=>$books]);
    }

}

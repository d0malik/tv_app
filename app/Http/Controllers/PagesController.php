<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('home');
    }

    public function view() {
        $quotes = app('App\Http\Controllers\QuotesController')->view_index();
        return view('view')->with('quotes', $quotes);
    }
}

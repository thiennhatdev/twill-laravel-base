<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        
    }

    public function list() 
    {
        return view('pages.news', [
            
        ]);
    }

    public function detail() 
    {
        return view('pages.news-detail', [
            
        ]);
    }
}

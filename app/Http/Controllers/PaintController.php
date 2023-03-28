<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaintController extends Controller
{
    public function __construct()
    {
        
    }

    public function detail() 
    {
        return view('pages.paint-detail', [
            
        ]);
    }
}

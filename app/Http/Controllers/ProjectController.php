<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        
    }

    public function list() 
    {
        return view('pages.projects', [
            'projects' => []
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AboutRepository;

class AboutController extends Controller
{
    public function __construct(AboutRepository $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
    }

    public function index() 
    {
        return view('pages.about', [
            'abouts' => $this->aboutRepository->index()
        ]);
    }
}

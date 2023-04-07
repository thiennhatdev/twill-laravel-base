<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;
use App\Repositories\PaintRepository;

class PageController extends Controller
{
    public function __construct(ProjectRepository $projectRepository, PaintRepository $paintRepository)
    {
        $this->projectRepository = $projectRepository;
        $this->paintRepository = $paintRepository;
    }

    public function homepage() 
    {
        $projects = $this->projectRepository->allProjects();
        $paints = $this->paintRepository->allPaintsWithCategory();
        // dd($paints);
        return view('pages.homepage', [
            'projects' => $projects,
            'paints' => $paints
        ]);
    }
}

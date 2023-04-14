<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function list() 
    {
        return view('pages.projects', [
            'projects' => $this->projectRepository->allProjects()
        ]);
    }
}

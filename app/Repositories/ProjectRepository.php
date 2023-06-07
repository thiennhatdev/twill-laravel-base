<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Project;

class ProjectRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions;

    public function __construct(Project $model)
    {
        $this->model = $model;
    }

    public function allProjects() 
    {
        $isExist = $this->model->exists();
        if($isExist) 
        {
            $allNews = $this->model
            ->published()
            ->orderBy('title')
            ->get()
            ->toQuery()
            ->paginate(10);  
            return $allNews;
        }
        else 
        {
            return [];
        }
    }
}

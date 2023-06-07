<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\News;

class NewsRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions;

    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function allNews()
    {
        $isExist = $this->model->exists();
        if($isExist) 
        {
            $allNews = $this->model
                ->published() 
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

    public function newsDetail($id)
    {
        $news = News::where('id', $id)
            ->published() 
            ->first();
        return $news;
    }

    public function recentNews($news_id)
    {
        $recent_news = $this->model
            ->where('news.id', '!=', $news_id)
            ->published() 
            ->get()
            ->take(5);
        return $recent_news;
    }
}

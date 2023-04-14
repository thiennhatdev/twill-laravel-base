<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NewsRepository;

class NewsController extends Controller
{
    public function __construct(Request $request, NewsRepository $newsRepository)
    {
        $this->request = $request;
        $this->newsRepository = $newsRepository;
    }

    public function list() 
    {
        return view('pages.news', [
            'news' => $this->newsRepository->allNews()
        ]);
    }

    public function detail() 
    {
        $news_detail = $this->newsRepository->newsDetail($this->request->id);
        $recent_news = $this->newsRepository->recentNews();
        return view('pages.news-detail', [
            'news_detail' => $news_detail,
            'recent_news' => $recent_news
        ]);
    }
}

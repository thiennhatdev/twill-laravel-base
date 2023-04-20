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
        if (empty($news_detail)) {
            return redirect()->route('404');
        }
        $recent_news = $this->newsRepository->recentNews($this->request->id);
        return view('pages.news-detail', [
            'news_detail' => $news_detail,
            'recent_news' => $recent_news
        ]);
    }
}

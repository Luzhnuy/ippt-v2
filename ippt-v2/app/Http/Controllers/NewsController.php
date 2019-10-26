<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NewsRepository;

class NewsController extends Controller
{
    private $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function showAll()
    {
        $news = $this->newsRepository->getAll();
        $catId = null;
        return view('pages.news-archive', ['news' => $news, 'catId'=> $catId ]);
    }

    public function showByCategory($categoryId)
    {
      $news = $this->newsRepository->getByCategory($categoryId);
      return view('pages.news-archive', ['news' => $news, 'catId' => $categoryId ]);
    }

    public function detail($id)
    {
        $news = $this->newsRepository->getOne($id);
        $lastNews = $this->newsRepository->getLast(4);

        return view('pages.news', ['news' => $news, 'lastNews' => $lastNews, ]);
    }

    public function showRandom()
    {
        $randomNews = $this->newsRepository->getRandom();
        return view('test-random', ['randomNews' => $randomNews]);

    }

}

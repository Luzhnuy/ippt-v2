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
        return view('test', ['news' => $news]);
    }

    public function showRandom()
    {
        $randomNews = $this->newsRepository->getRandom();
        return view('test-random', ['randomNews' => $randomNews]);

    }

}

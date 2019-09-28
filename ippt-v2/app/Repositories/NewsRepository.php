<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterfaces\Post;
use App\Entity\News;

class NewsRepository implements Post
{
    private $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    public function getOne($id)
    {
        return $this->news->where('id',$id)->first();
    }

    public function getAll()
    {
        return $this->news->orderBy('id')->get();
    }

    public function getLast($countOfLast)
    {
        return $this->news->orderBy('id', 'desc')->take($countOfLast)->get();
    }

    private function random()
    {
        $countOfNews = $this->news->count();
        return rand(1,$countOfNews);
    }

    public function getRandom()
    {
        return $this->getOne($this->random());
    }

    public function getByCategory($categoryId)
    {
      return $this->news->where("type_of_new", $categoryId)->get();
    }

}

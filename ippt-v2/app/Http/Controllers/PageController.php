<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NewsRepository;
use App\Repositories\SlideRepository;

class PageController extends Controller
{

  private $newsRepository;
  private $slideRepository;

  public function __construct(NewsRepository $newsRepository, SlideRepository $slideRepository)
  {
    $this->newsRepository = $newsRepository;
    $this->slideRepository = $slideRepository;
  }

  public function showMain()
  {
      // $user = new \App\Entity\User();
      // $user->password = \Hash::make('turupuru2');
      // $user->email = 'l.luzhnuy@gmail.com';
      // $user->name = 'Lubomur';
      // $user->save();
      $news = $this->newsRepository->getLast(4);
      $slide = $this->slideRepository->getAll();

      return view('pages.main', [
        'news' => $news,
        'slides' => $slide,
      ]);

  }

  public function showAbout()
  {
    return view('pages.static.about-us');
  }

  public function showEducationScience()
  {
    return view('pages.static.education-science');
  }

  public function showStudentCollege()
  {
    $news = $this->newsRepository->getByCategory(1);

    return view('pages.student_college.student-college', [
      'news' => $news,
    ]);
  }

  public function showEntrant()
  {
    return view('pages.static.entrant');
  }

}

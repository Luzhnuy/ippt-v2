<?php

namespace App\Repositories;

use App\Entity\Slider;

class SlideRepository
{
    private $slide;

    public function __construct(Slider $slide)
    {
        $this->slide = $slide;
    }

    public function getAll()
    {
        return $this->slide->orderBy('id')->get();
    }


}

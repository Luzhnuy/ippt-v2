<?php

namespace App\Repositories\RepositoryInterfaces;

interface Post
{
    function getOne($id);

    function getAll();

    function getLast($countOfLast);

}

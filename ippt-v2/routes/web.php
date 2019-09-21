<?php

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    return view('layouts.index');
});

Route::group(['prefix' => 'news'], function () {

    Route::get('/', 'NewsController@showAll');

    Route::get('random', 'NewsController@showRandom');
});


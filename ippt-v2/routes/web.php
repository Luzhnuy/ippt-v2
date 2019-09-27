<?php

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'PageController@showMain')->name('main');
Route::get('about-us', 'PageController@showAbout');

Route::group(['prefix' => 'news'], function () {

    Route::get('/', 'NewsController@showAll')->name('news');
    Route::get('{id}', 'NewsController@detail')->name('newsDetails');

    Route::get('random', 'NewsController@showRandom');
});

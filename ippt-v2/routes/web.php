<?php

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'PageController@showMain')->name('main');
Route::get('about-us', 'PageController@showAbout')->name('about');
Route::get('education-science', 'PageController@showEducationScience')->name('educationScience');
Route::get('student-college', 'PageController@showStudentCollege')->name('studentCollege');
Route::get('for-entrant', 'PageController@showEntrant')->name('entrant');

Route::group(['prefix' => 'news'], function () {

    Route::get('/', 'NewsController@showAll')->name('news');
    Route::get('{id}', 'NewsController@detail')->name('newsDetails');
    Route::get('category/{categoryId}', 'NewsController@showByCategory')->name('showByCategory');

    Route::get('random', 'NewsController@showRandom');
});

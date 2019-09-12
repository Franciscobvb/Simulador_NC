<?php

Route::resource('simuladornc', 'simuladornc\CrudController');
Route::post('simuladornc.welcome', 'simuladornc\CrudController@store')->name('NikkenChallenge');

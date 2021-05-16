<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bords/index','BordsController@index');
Route::get('/bords/create','BordsController@create');

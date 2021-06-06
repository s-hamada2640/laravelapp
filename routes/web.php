<?php

Route::get('/', function () {
    return view('welcome');
});

/*              トップページ                */
Route::get('/bords/index','BordsController@index');

/*              投稿機能                */
Route::get('/bords/create', 'BordsController@add');
Route::post('/bords/create','BordsController@create');
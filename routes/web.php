<?php

// デフォルトのコメント部分は省略

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');

// ログイン認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
<?php

// デフォルトのコメント部分は省略

Route::get('/', 'TasksController@index');

// ログイン認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');


// ユーザ機能
Route::group(['middleware' => ['auth']], function () {
Route::resource('users', 'UsersController', ['only' => ['index']]);
Route::resource('tasks', 'TasksController', ['only' => ['create','show','edit','store','update','destroy']]);
});
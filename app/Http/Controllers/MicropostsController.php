<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MicropostsController extends Controller
{
     public function index()
   {
        //ここが開始位置です
    $data = [];
        if (\Auth::check()){
            $user = \Auth::user();
            $tasks=$user->tasklist()->orderBy('created_at', 'desc')->get();

    $data = [
             'user' => $user,
             'tasks' => $tasks,
            ];
    }
   
 // ここはログインしている場合の処理

// ここはログインしていない場合の処理

// ウェルカムページ (welcomeのビュー) を表示する
         return view('welcome');
       
    }
}

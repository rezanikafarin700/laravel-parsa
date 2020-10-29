<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('article',function (){
//    $articles = \App\Article::paginate(2);
//    return response()->json([
//        'articles' => $articles,
//        'video' => [1,2,3,4,5]
//    ],200);
//});



Route::resource('article','API\ArticleController',['except'=>'create','edit']);
Route::get('lang',function (){
   $arr = ['php','laravel','javaScript','Vue.js','React','Css','Sass'];
   return $arr;
});

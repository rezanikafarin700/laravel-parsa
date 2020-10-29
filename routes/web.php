<?php


use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return 'salam';
});

Route::prefix('admin')->group(function () {
    Route::prefix('user')->group(function () {
        Route::post('store', 'UserController@store');
        Route::get('', 'UserController@index');
        Route::get('add', 'UserController@add');
        Route::get('create', 'UserController@create');
        Route::get('edit/{id}', 'UserController@edit');
        Route::put('update', 'UserController@update');
        Route::get('remove/{id}', 'UserController@remove');
        Route::delete('delete', 'UserController@delete');
//        Route::get('{id}', 'UserController@show');

    });

    Route::prefix('student')->group(function () {
        Route::get('', 'StudentController@index');
        Route::post('store', 'StudentController@store');
        Route::get('create', 'StudentController@create');
        Route::get('{id}/edit', 'StudentController@edit');
        Route::get('{id}/create', 'StudentController@create');
        Route::put('{id}', 'StudentController@update');
        Route::delete('{id}', 'StudentController@destroy');
        Route::get('{id}', 'StudentController@show');
    });

});



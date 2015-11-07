<?php


Route::get('/', 'WelcomeController@index');

Route::get('/contact',"WelcomeController@contact");

Route::get('/about',"PagesController@about");

//Route::get('/articles',"ArticlesController@index");
//Route::get('/articles/create',"ArticlesController@create");
//Route::get('/articles/{id}',"ArticlesController@show");
//Route::get('/articles/{id}/edit',"ArticlesController@edit");
//Route::post('/articles',"ArticlesController@store");
//Route::patch('/articles/{id}',"ArticlesController@update");

Route::resource('articles', 'ArticlesController');

Route::controllers(
    [
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController'

    ]
);
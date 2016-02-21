<?php

//Test routes
require app_path('Http/Routes/tests.php');


// API
Route::group(['namespace' => 'API', 'prefix' => 'api'], function () {
//    Route::resource('calories', 'Calories\CaloriesController', ['only' => 'show']);
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
});

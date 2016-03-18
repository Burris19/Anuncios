<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 * Routes for client
 */

Route::group(['namespace' => 'Frontend'], function() {

    Route::get('/', 'HomeController@index');


});


/*
 * Routes for Administrator
 */
Route::group(['prefix' => 'admin'], function () {

    Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
        Route::get('/', 'HomeController@index');
        Route::get('configure-principal', 'ConfigurePrincipal@index');
        Route::post('configure-principal','ConfigurePrincipal@store');

        Route::get('configure-seo', 'ConfigureSeo@index');
        Route::post('configure-seo', 'ConfigureSeo@store');
        resource('configure-column-one', 'ConfigureColumnOne');
        resource('configure-column-two', 'ConfigureColumnTwo');
        resource('configure-banner', 'ConfigureBanners');
        resource('configure-slide-show', 'ConfigureSlideShow');

    });


    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', 'Auth\AuthController@postRegister');

    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');

    Route::post('password/reset', 'Auth\PasswordController@postReset');
});

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');




<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::middleware(['auth'])->group(function (){

    Route::get('/dashboard-v1', 'HomeController@dashboardV1')->name('dashboard-v1');
    Route::get('/dashboard-v2', 'HomeController@dashboardV2')->name('dashboard-v2');

    Route::get('/dependencias', 'DependenciesController@index')
        ->name('dependencies.index');
    Route::get('/dependencias/nuevo', 'DependenciesController@create')->name('dependencies.create');
    Route::post('/dependencias', 'DependenciesController@store');
    Route::delete('/dependencias/{dependency}', 'DependenciesController@destroy')->name('dependencies.destroy');
    Route::get('/dependencias/{dependency}', 'DependenciesController@show')
        ->where('dependency', '[0-9]+')
        ->name('dependencies.show');
    Route::get('/dependencias/{dependency}/editar', 'DependenciesController@edit')->name('dependencies.edit');

});
<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function(){

return view('about');

})->middleware('auth');

Route::get('/edit', function(){
    if (Gate::allows('edit-settings')) 
            return view('edit');
    else
    abort(403);

})->middleware('auth');



Route::get('/form', function(){
        return view('form');
})->middleware('auth');
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Hash;

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


Route::post('/form',function (){
    $data = request()->validate([
        'Fullname' => 'required|max:75|regex:/^[a-zA-Z]+$/u',
        'Age' => ['required', 'numeric']
    ]);

    // Insert data after this

    return redirect('/home');
});


Route::get('/encrypt', function (){


    return view('encrypt');

});

Route::post('/encrypt',function () {
    if(request()->has('encrypt')){
        $data = request()->validate(['encrypt' => 'required']);
        $data = encrypt($data['encrypt']);
    }
    if(request()->has('decrypt')){
        $data = request()->validate(['decrypt' => 'required']);
        $data = decrypt($data['decrypt']);
    }
return view('encrypt',compact('data'));
});


Route::get('/hash',function (){
    return view('hash');
});

Route::post('/hash', function (){
        $data =request()->validate(['hash' => 'required']);

        $Bcrypt = Hash::make($data['hash'], [
            'rounds' => 12
        ]);

        $Argon2 = Hash::make($data['hash'], [
            'memory' => 1024,
            'time' => 2,
            'threads' => 2,
        ]);
        return view('/hash',compact('Bcrypt','Argon2'));
});
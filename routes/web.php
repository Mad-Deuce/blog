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

Route::get('/test/', function (){
    return ('!');
});

Route::get('/dir/test/', function (){
    return ('!!');
});

Route::get('/user/{id}/', function ($id){
    return ($id);
});

Route::get('/username/{name}/', function ($name){
    return ('User-'.$name);
});

Route::get('/sum/{num1}/{num2}', function ($num1, $num2){
    return ('Sum='.$num1+$num2);
});

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
    
    $users = [
        ['id' => 1,'name' => 'ram'],
        ['id' => 2,'name' => 'lakshman'],
        ['id' => 3,'name' => 'bhart'],
    ];
    return view('welcome', compact('users'));
});

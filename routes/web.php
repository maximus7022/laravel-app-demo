<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { // DONE
	return view('home');
});

Route::get('/drum', function () { // DONE
	return view('drumpad');
});

Route::get('/dicee', function () { // DONE
	return view('dicee');
});

Route::get('/calc', function () { //
	return view('calc');
});

Route::get('/colors', function () { //
	return view('colors');
});
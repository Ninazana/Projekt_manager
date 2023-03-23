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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index' . function() {
    return view('welcome');
})
Route::get('/user/{id}'.function($id) {
    return'User' .$id;
})
Route::get('/hello', function () {
    return view('hello', ['name' => 'Bruce']);
})
Route::get('/hello', function () {
    return view('hello', [
        'names' => ['Bruce', 'Peter', 'Klark']
        ]);
});
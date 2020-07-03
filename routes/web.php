<?php

use App\User;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UserController');
Route::resource('materias', 'MateriaController');
Route::resource('carreras', 'CarreraController');

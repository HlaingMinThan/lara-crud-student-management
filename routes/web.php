<?php

use Illuminate\Support\Facades\Route;
// index home page route
Route::get('/', 'StudentController@index')->name('index');
// create page route
Route::get('/create','StudentController@create')->name('create');
    // insert
Route::post('/insert','StudentController@insert')->name('insert');
// update page route
Route::get('/update/{id}','StudentController@update')->name('update');
    // edit
Route::post('/edit/{id}','StudentController@edit')->name('edit');
//delete route
Route::get('/delete/{id}','StudentController@delete')->name('delete');
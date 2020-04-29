<?php

Route::get('/', 'RegisterController@index')->name('register.list');
// criar
Route::get('/create', 'RegisterController@create')->name('register.create');
Route::post('/create', 'RegisterController@createNew')->name('register.create');
// editar
Route::get('/edit/{id}', 'RegisterController@edit')->name('register.edit');
Route::put('/edit/{id}', 'RegisterController@update')->name('register.update');
// excluir
Route::post('/delete/{id}', 'RegisterController@delete')->name('register.delete');

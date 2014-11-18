<?php
Route::get('/login', array('as' => 'user.login', 'uses' => 'Larangular\User\Controllers\LoginController@show'));
Route::get('/logout', array('as' => 'user.logout', 'uses' => 'Larangular\User\Controllers\LogoutController@show'));
Route::get('/register', array('as' => 'user.register', 'uses' => 'Larangular\User\Controllers\RegisterController@show'));
Route::get('/reset', array('as' => 'user.reset', 'uses' => 'Larangular\User\Controllers\ResetController@show'));
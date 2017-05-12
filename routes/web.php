<?php

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

Route::get('/', 'GameController@home');

Route::get('topgame', 'GameController@topgame');

Route::get('toptype', 'GameController@toptype');

Route::get('event', 'GameController@event');

Route::get('search', 'GameController@search');

Route::get('signin', 'GameController@signin');

Route::get('account', 'GameController@account');

Route::get('prize', 'GameController@prize');

Route::get('allgame', 'GameController@allgame');





<?php

Route::get('/', 'PageController@index');
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');
Route::get('service', 'PageController@service');
Route::get('colordevice', 'PageController@colorDevice');
Route::get('nocolordevice', 'PageController@nocolorDevice');

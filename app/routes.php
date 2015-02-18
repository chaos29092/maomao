<?php

Route::get('/', 'PageController@index');
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');
Route::get('service', 'PageController@service');
Route::get('colordevice', 'PageController@colorDevice');
Route::get('nocolordevice', 'PageController@nocolorDevice');

Route::get('colordevice/laptop', 'ProductController@colorLaptop');
Route::get('colordevice/portable', 'ProductController@colorPortable');
Route::get('colordevice/ipad', 'ProductController@colorIpad');
Route::get('nocolordevice/laptop', 'ProductController@nocolorLaptop');
Route::get('nocolordevice/ipad', 'ProductController@nocolorIpad');

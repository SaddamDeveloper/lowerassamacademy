<?php

Route::get('/', 'Web\WebsiteController@index')->name('web.index');
Route::get('/contact', 'Web\WebsiteController@contact')->name('web.contact');
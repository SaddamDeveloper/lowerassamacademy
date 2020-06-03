<?php
require_once  __DIR__."/frontend.php";

Route::get('/admin/login', 'Admin\AdminLoginController@showAdminLoginForm')->name('admin.login');
Route::post('/admin/login', 'Admin\AdminLoginController@adminLogin');
Route::post('/admin/logout', 'Admin\AdminLoginController@logout')->name('admin.logout');

Route::group(['middleware'=>'auth:admin','prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('/dashboard', 'AdminDashboardController@index')->name('admin.dashboard');

    // SLiders
    Route::get('/all/sliders', 'AdminDashboardController@sliders')->name('admin.sliders');
    Route::get('/add/sliders/form', 'AdminDashboardController@addSliderForm')->name('admin.add_slider_form');
    Route::post('/add/sliders', 'AdminDashboardController@addSlider')->name('admin.add_slider');
    Route::get('/get/sliders/list', 'AdminDashboardController@getSliderList')->name('admin.get_slider_list');
    Route::get('/status/slider/{id}/{status}','AdminDashboardController@statusSlider')->name('admin.slider_status');
    
    // Notices
    Route::get('/all/notices', 'AdminDashboardController@notices')->name('admin.notices');
    Route::get('/add/notices/form', 'AdminDashboardController@addNoticeForm')->name('admin.add_notice_form');
    Route::post('/add/notices', 'AdminDashboardController@addNotice')->name('admin.add_notice');
    Route::get('/get/notices/list', 'AdminDashboardController@getNoticeList')->name('admin.get_notice_list');
    Route::get('/status/notice/{id}/{status}','AdminDashboardController@statusNotice')->name('admin.notice_status');
});


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
    
    // Galleries
    Route::get('/all/galleries', 'AdminDashboardController@galleries')->name('admin.galleries');
    Route::get('/add/gallery/form', 'AdminDashboardController@addGalleryForm')->name('admin.add_gallery_form');
    Route::post('/add/galleries', 'AdminDashboardController@addGallery')->name('admin.add_gallery');
    Route::get('/get/galleries/list', 'AdminDashboardController@getGalleryList')->name('admin.get_gallery_list');
    Route::get('/status/gallery/{id}/{status}','AdminDashboardController@statusGallery')->name('admin.gallery_status');
    
    // Applicants
    Route::get('/applicants', 'AdminDashboardController@applicants')->name('admin.applicants');
    Route::get('/get/applicant/list', 'AdminDashboardController@getApplicantList')->name('admin.get_applicant_list');
    Route::get('/applicant/show/{id}', 'AdminDashboardController@show')->name('admin.show');
    Route::get('/applicant/edit/{id}', 'AdminDashboardController@edit')->name('admin.edit');
    
    // Payment
    Route::get('/applicant/pay/proof/{id}', 'AdminDashboardController@payProof')->name('admin.payproof');

});


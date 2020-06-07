<?php

Route::get('/', 'Web\WebsiteController@index')->name('web.index');
Route::get('/contact', 'Web\WebsiteController@contact')->name('web.contact');
Route::get('/gallery', 'Web\WebsiteController@gallery')->name('web.gallery');
Route::get('/admission/procedure', 'Web\WebsiteController@admissionProcedure')->name('web.admission_proc');
Route::get('/registration/admission', 'Web\WebsiteController@registrationAdmission')->name('web.reg_admission');
Route::get('/our/school', 'Web\WebsiteController@ourSchool')->name('web.our_school');
Route::get('/exams', 'Web\WebsiteController@exams')->name('web.exams');
Route::get('/courses', 'Web\WebsiteController@courses')->name('web.courses');
Route::get('/student/login/form', 'Web\WebsiteController@showStudentLoginForm')->name('student.login');
Route::post('/student/login', 'Web\WebsiteController@studentLogin')->name('login');
Route::post('/student/logout', 'Web\WebsiteController@logout')->name('student.logout');

Route::get('/student-register','Web\WebsiteController@showStudentRegistrationForm')->name('frontend.student_register');
Route::post('/student/register/submit', 'Web\WebsiteController@store')->name('student.registration.store');

Route::get('/about','Web\WebsiteController@about')->name('frontend.about');

Route::group(['middleware'=>'auth:web','prefix'=>'web','namespace'=>'Web'],function(){
    Route::get('/dashboard', 'StudentDashboardController@index')->name('student.dashboard');
    Route::get('/student-admission', 'StudentDashboardController@showAdmissionForm')->name('frontend.student_admission');
    Route::post('/student/form/submit', 'StudentDashboardController@store')->name('student.form.store');
    Route::get('/payment', 'StudentDashboardController@showPaymentForm')->name('frontend.payment');
    Route::post('/student/pay/submit', 'StudentDashboardController@pay')->name('student.pay');
});

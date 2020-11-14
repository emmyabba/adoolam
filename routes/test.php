<?php

Route::group(['namespace' => 'Test'], function() {
    Route::get('/', 'HomeController@index')->name('test.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('test.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('test.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('test.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('test.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('test.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('test.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('test.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('test.verification.notice');
    Route::get('email/verify/{id}/{hash}','Auth\VerificationController@verify')->name('test.verification.verify');
});
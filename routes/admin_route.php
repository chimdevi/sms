<?php

Route::get('/Admin/Login', 'Admin\LoginController@index')->name('admin.login');
Route::post('/Admin/Login', 'Admin\LoginController@adminLogin')->name('admin.login');
Route::post('/admin/logout', 'Admin\LoginController@logout')->name('admin.logout');
Route::group(['middleware'=>'auth:admin','prefix'=>'admin','namespace'=>'Admin'],function(){
	Route::get('/deshboard', 'DashboardController@index')->name('admin.deshboard');

});
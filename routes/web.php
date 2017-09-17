<?php

$this->get('/', function () {
    return view('welcome');
});




$this->get('login-admin', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
$this->post('login-admin', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Auth::routes();

$this->group(['middleware' => ['custom.auth']], function(){
	$this->get('home', 'HomeController@index')->name('home');
});

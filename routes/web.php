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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('/website/register');
});

Route::get('/login', function () {
    return view('/website/login');
});

Route::get('/project', function () {
    return view('/system/project/project');
});

Route::get('/projectlist', function () {
    return view('/system/project/projectlist');
});

Route::get('/dashboard', function () {
    return view('/system/dashboard');
});

Route::get('/clients', function () {
    return view('/system/clients/clients');
});

Route::get('/client', function () {
    return view('/system/clients/client');
});

Route::get('/settings', function () {
    return view('/system/user/settings');
});

Route::get('/profile', function () {
    return view('/system/user/profile');
});

Route::get('/support', function () {
    return view('/system/support/support');
});
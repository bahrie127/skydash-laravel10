<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/dashboard', function () {
    return view('pages.dashboard', ['type_menu' => 'dashboard']);
});

Route::get('/ui-element-buttons', function () {
    return view('pages.ui-element-buttons', ['type_menu' => 'ui-element']);
});
Route::get('/ui-element-dropdowns', function () {
    return view('pages.ui-element-dropdowns', ['type_menu' => 'ui-element']);
});
Route::get('/ui-element-typograpy', function () {
    return view('pages.ui-element-typograpy', ['type_menu' => 'ui-element']);
});
Route::get('/form-element-basic', function () {
    return view('pages.form-element-basic', ['type_menu' => 'form-element']);
});
Route::get('/table-basic', function () {
    return view('pages.table-basic', ['type_menu' => 'table']);
});
Route::get('/icons-mdi', function () {
    return view('pages.icons-mdiicons', ['type_menu' => 'icon']);
});
Route::get('/charts-js', function () {
    return view('pages.chart-chartjs', ['type_menu' => 'chart']);
});
Route::get('/login', function () {
    return view('pages.user-login', ['type_menu' => 'user']);
});
Route::get('/register', function () {
    return view('pages.user-register', ['type_menu' => 'user']);
});
Route::get('/error-404', function () {
    return view('pages.error-404', ['type_menu' => 'error']);
});
Route::get('/error-500', function () {
    return view('pages.error-500', ['type_menu' => 'error']);
});
Route::get('/documentation', function () {
    return view('pages.documentation', ['type_menu' => 'doc']);
});

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

Route::get('/', function(){
    return view('auth.login');
});

Auth::routes();
Route::match(["GET", "POST"], "/register", function(){
    return redirect("/login");
})->name("register");

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/student', 'StudentController');
Route::post('student/create', 'StudentController@store'); 

Route::get('/admin/news/index','NewsController@read');
Route::get('/admin/news/create', function () {
    return view('admin.news.create');
});
Route::post('/admin/news/create/store', 'NewsController@store');
// Route::get('/admin/news/edit/{id}', 'NewsController@edit');
Route::put('/admin/news/update/{id}', 'NewsController@update');
Route::get('/admin/news/index/delete/{id}', 'NewsController@delete');

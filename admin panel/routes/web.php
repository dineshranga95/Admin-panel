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
 

Auth::routes();
  
Route::get('/home', 'HomeController@index')->name('home');
 
Route::group(['middleware'=>['auth','admin']], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    }); 
    
    Route::get('/regrole','admin\dashboardcontroller@register');
    Route::get('/role-edit/{id}','admin\dashboardcontroller@registeredit');
    Route::PUT('/register-update/{id}','admin\dashboardcontroller@registerupdate');
    Route::delete('/role-delete/{id}','admin\dashboardcontroller@registerdelete');
    Route::get('/aboutus','admin\aboutuscontroller@aboutus');

    Route::post('/save-aboutus','admin\aboutuscontroller@save');

});




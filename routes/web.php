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
 
Route::get('/test/{id}', function($id){
    return  $id ;
})-> name('A');

Route::get('/test1/{id?}', function(){
    return 'BENALI Mustapha';
})-> name('B');

Route::group(['namespace' => 'Front'], function(){
    Route::get('/users' , 'UserController@ShowUsers');
});

route::get('login' , function(){
    return 'This page need to be authenticated';
})->name('login');


Route::resource('news', 'NewsController');

Auth::routes(["verify"=>true]);

Route::get('/home', 'HomeController@index')->name('home')-> middleware('verified');

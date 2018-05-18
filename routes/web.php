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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/members/{role}', 'HomeController@memberIndex');
Route::get('/members/{role}/{id}', 'HomeController@memberShowIndex');

Route::get('/projects', 'HomeController@projectIndex')->name('project');

Route::get('/publications', 'HomeController@publicationIndex')->name('publication');

Route::get('/rewards', 'HomeController@rewardIndex')->name('reward');

Route::get('/job', 'HomeController@jobIndex')->name('job');

Route::get('/activities', 'HomeController@activitiesIndex')->name('activity');

Route::get('/contacts', 'HomeController@contactIndex')->name('contact');

Route::get('/messages', 'CommentController@index')->name('message');
Route::post('/commentStore', 'CommentController@store')->name('message');

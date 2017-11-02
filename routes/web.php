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

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/rooms', 'RoomController@index')->name('rooms.index');
//Route::get('/rooms', 'RoomController@create')->name('rooms.create');


//'middleware' => ['auth']]
Route::group(['prefix' => '/home'],  function(){

    Route::get('/', 'HomeController@index')->name('home');

    //Route For building
    Route::group(['prefix' => 'building'], function() {
        Route::get('/show', 'BuildingController@index')->name('buildings.index');
        Route::get('/create', 'BuildingController@create')->name('building.create');
        Route::post('/', 'BuildingController@store')->name('building.store');
    });

    //Route For suites
    Route::group(['prefix' => 'suite'], function() {
        Route::get('/show', 'SuiteController@index')->name('suites.index');
        Route::get('/create', 'SuiteController@create')->name('suite.create');
        Route::post('/', 'SuiteController@store')->name('suite.store');
    });


    //Route For Rooms
    Route::group(['prefix' => 'rooms'], function() {
        Route::get('/show', 'RoomController@index')->name('rooms.index');
        Route::get('/create', 'RoomController@create')->name('room.create');
    });

    //Route For Students
    Route::group(['prefix' => 'student'], function() {
        Route::get('/', 'StudentController@index')->name('students.index');
        Route::get('/create', 'StudentController@index')->name('student.create');
    });

   // Route::get('/', 'RoomController@index')->name('home.index');

});

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', array('as' => 'homePage', 'uses' => 'PagesController@index'));

Route::get('basic', array('as' => 'basicPage', 'uses' => 'PagesController@basic'));

Route::get('contact', array('as' => 'contactPage', 'uses' => 'PagesController@contact'));

Route::get('about', array('as' => 'aboutPage', 'uses' => 'PagesController@about'));

Route::get('photos', array('as' => 'photoPage', 'uses' => 'PagesController@photo'));

Route::get('videos', array('as' => 'videoPage', 'uses' => 'PagesController@video'));

Route::get('message', array('as' => 'messagePage', 'uses' => 'PagesController@message'));

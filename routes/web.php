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

Route::get('/','SearchController@index');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('searchD','SearchPostedController@searchD');
Route::post('searchD','SearchPostedController@searchD');


Route::get('searchA','SearchPostedController@searchA');
Route::get('searchV','SearchPostedController@searchV');

Route::get('advance','SearchController@advance');

Route::get('detailDoc/{id}','SearchPostedController@detailDoc');
Route::get('detailVideo/{id}','SearchPostedController@detailVideo');
Route::get('detailAudio/{id}','SearchPostedController@detailAudio');


Route::get('guestPurchaseList','SearchController@guestPurchaseList');
Route::post('guestPurchaseList','SearchController@guestPurchaseList');

Route::get('escrow','SearchPostedController@escrow');

Route::get('escrow','SearchPostedController@escrow');

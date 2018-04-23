<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function(){
    Route::resource('author', 'AuthorController');
    Route::resource('book', 'BookController');
    Route::resource('editor', 'EditorController');
    Route::resource('gender', 'GenderController');
    Route::resource('manuscript', 'ManuscriptController');
    Route::resource('manuscriptEditor', 'ManuscriptEditorController');
    Route::resource('manuscriptReader', 'ManuscriptReaderController');
    Route::resource('reader', 'ReaderController');
    Route::resource('received', 'ReceivedController');
    Route::resource('stage', 'StageController');
    Route::resource('status', 'StatusController');
    
});
<?php

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

Route::middleware(['auth:api', function () {
    Route::get('media' . 'Nucleus\MediaController@index'); // will return a list of folders/files
    Route::post('media', 'Nucleus\MediaController@store'); // add new media
    Route::delete('media', 'Nucleus\MediaController@destroy'); // delete media

    Route::post('media-folders' . 'Nucleus\MediaFolderController@store'); // add a new folder
    Route::put('media-folders' . 'Nucleus\MediaFolderController@update'); // edit folder name
    Route::delete('media-folders' . 'Nucleus\MediaFolderController@delete'); // remove folder
}]);

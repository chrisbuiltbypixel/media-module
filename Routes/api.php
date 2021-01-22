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

Route::group(['middleware' => 'auth:admin_api'], function () {
    Route::get('media/{folderId?}', 'Nucleus\MediaController@index'); // will return a list of folders/files
    Route::post('media/{folderId}', 'Nucleus\MediaController@store'); // add new media
    Route::delete('media', 'Nucleus\MediaController@destroy'); // delete media

    Route::post('media-folders/{folder?}', 'Nucleus\MediaFolderController@store'); // add a new folder
    Route::put('media-folders/{folder}', 'Nucleus\MediaFolderController@update'); // edit folder name
    Route::delete('media-folders', 'Nucleus\MediaFolderController@destroy'); // remove folder
});

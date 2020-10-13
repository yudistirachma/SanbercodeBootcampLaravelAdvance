<?php

use Illuminate\Http\Request;

Route::namespace('Notes')->middleware('cors')->group(function(){
    Route::prefix('notes')->group(function(){
        Route::post('create-new-note', 'NoteController@store');
    });
    Route::prefix('subject')->middleware('cors')->group(function(){
        Route::get('', 'SubjectController@index');
    });
});

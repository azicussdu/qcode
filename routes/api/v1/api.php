<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Users
Route::prefix('/user')->group(function(){
   Route::post('/login', 'api\v1\PassportController@login');
   Route::post('/register', 'api\v1\PassportController@register');
});

Route::prefix('/courses')->group(function(){
    Route::get('/all', 'api\v1\CourseController@index')->name('courses.index');
    Route::get('/{course:alias}', function (App\Models\Course $course) {
        return $course;
    });
});

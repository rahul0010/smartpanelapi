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

Route::resource('/v1/students', v1\StudentController::class);
Route::resource('/v1/faculties', v1\FacultyController::class);
Route::resource('/v1/batches', v1\BatchController::class);
Route::resource('/v1/courses', v1\CourseController::class);
Route::resource('/v1/fees', v1\FeeController::class);
Route::resource('/v1/salaries', v1\SalaryController::class);

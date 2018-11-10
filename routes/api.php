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

Route::resource('/v1/students', v1\StudentController::class, [
    'except' =>['create', 'edit']
    ]);
Route::resource('/v1/faculties', v1\FacultyController::class, [
    'except' =>['create', 'edit']
    ]);
Route::resource('/v1/batches', v1\BatchController::class, [
    'except' =>['create', 'edit']
    ]);
Route::resource('/v1/courses', v1\CourseController::class, [
    'except' =>['create', 'edit']
    ]);
Route::resource('/v1/fees', v1\FeeController::class, [
    'except' =>['create', 'edit']
    ]);
Route::resource('/v1/salaries', v1\SalaryController::class, [
    'except' =>['create', 'edit']
    ]);

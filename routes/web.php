<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/
Route::post('profile/{id}', function () {
    // Validate the request...

    return  1;
});
Route::get('/ScheduleGroupSelection/{slug}', 'Controller@showGroupShedule')->name('showByGroup');
Route::get('/ScheduleLecturerSelection/{slug}', 'Controller@showLecturerShedule')->name('showByLecturer');
Route::get('/', 'Controller@CategoryByGroup');
Route::post('/ScheduleLecturerSelection', 'Controller@LecturerValidation');
Route::post('/ScheduleGroupSelection', 'Controller@GroupValidation');
Route::get('/LecturerSchedule', 'Controller@CategoryByLecturer');
Route::get('/GroupSchedule', 'Controller@CategoryByGroup');

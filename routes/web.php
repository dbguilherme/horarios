<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiScheduleController;

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

// Specific schedule
Route::get('schedule/{uid}/{period}/{schedule}', 'App\Http\Controllers\ScheduleController@show')->name('schedule.show');

// Schedules
Route::get('schedules', 'App\Http\Controllers\SchedulesController@index');
Route::get('schedules/{uid}/{period?}', 'App\Http\Controllers\SchedulesController@redir');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

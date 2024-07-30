<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ChartController;

Route::get('/chart', [ChartController::class, 'index'])->name('chart.index');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/', [StudentController::class, 'index'])->name('students.index');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

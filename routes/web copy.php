<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome');});

Route::get('/first', [MainController::class, 'show'])->name('first');

Route::get('/students', [StudentController::class, 'index'])->name('student-idnex');

Route::get('/array', [MainController::class, 'showArray'])->name('array');

Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');

Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');

Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');

Route::get('/reports/{report}', [ReportController::class, 'show'])->name('report.show');

Route::put('/reports/{report}', [ReportController::class, 'update'])->name('report.update');
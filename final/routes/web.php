<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\BUController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProjectDeveloperController;
use App\Http\Controllers\HomeController;

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

Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/request-form', function() {
    return view('requestform');
})->name('requestform');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/managers', [ManagerController::class, 'index'])->name('managers');


// Grouped routes with authentication middleware
Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', UserController::class);
    Route::resource('bus', BUController::class);
    Route::resource('managers', ManagerController::class);
    Route::resource('developers', DeveloperController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('reports', ReportController::class);
    Route::resource('project_developers', ProjectDeveloperController::class);
});

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
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutus');
Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactus');
Route::get('/managers', [ManagerController::class, 'index'])->name('managers');
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::get('/projects/{project}/assign', [ProjectController::class, 'update'])->name('projects.update');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/reports/create', [ReportController::class, 'create'])->name('reports.create');
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
Route::get('/reports/create/{projectId}', [ReportController::class, 'create'])->name('reports.create');
Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');
Route::get('/reports/{report}', [ReportController::class, 'show'])->name('reports.show');

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

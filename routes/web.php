<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

use Inertia\Inertia;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('course', [CourseController::class, 'index'])->name('course');
Route::get('courseAdd', [CourseController::class, 'create']);
Route::get('courseShow', [CourseController::class, 'show']);
Route::get('courseEdit', [CourseController::class, 'edit']);
Route::post('courseStore', [CourseController::class, 'store']);
// Route::resource('courses', CourseController::class);

require __DIR__.'/auth.php';

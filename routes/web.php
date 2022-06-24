<?php

use App\Http\Controllers\collectionController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

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
    return redirect('dashboard');
})->name('home');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

//Google Authentication Routes
Route::get('login/google', [SocialController::class, 'googleRedirect'])->middleware('web');
Route::get('login/google/callback', [SocialController::class, 'googleLoginOrRegister'])->middleware('web');

Route::get('department', [DepartmentController::class, 'list'])->middleware(['auth', 'isadmin'])->name('department');
Route::delete('department/delete', [DepartmentController::class, 'destroy'])->middleware(['auth', 'isadmin'])->name('department.delete');
Route::get('department/create', [DepartmentController::class, 'create'])->middleware(['auth', 'isadmin'])->name('department.add');
Route::post('department/store', [DepartmentController::class, 'store'])->middleware(['auth', 'isadmin'])->name('department.store');
Route::get('/department_status/{id}/{status}', [DepartmentController::class, 'department_status'])->middleware(['auth', 'isadmin']);

//skill
Route::resource('skill', SkillController::class)->middleware(['auth', 'isadmin']);

Route::get('search', [collectionController::class, 'index'])->name('search');
Route::get('algoriya/search', [collectionController::class, 'search'])->name('algoriya.search');

require __DIR__ . '/auth.php';

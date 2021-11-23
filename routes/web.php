<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\AdminProfileController;

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

// Middlewares
Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {

    return view('admin.index');
})->name('dashboard');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {

    return view('dashboard');
})->name('dashboard');




// Users all routes
Route::get('/logout', [IndexController::class, 'logout'])->name('user.logout');
Route::get('/', [IndexController::class, 'index']);
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/profile/edit', [IndexController::class, 'profileEdit'])->name('profile.edit');
Route::post('/profile/store', [IndexController::class, 'profileStore'])->name('profile.store');
Route::get('/change/password', [IndexController::class, 'changePassword'])->name('change.password');
Route::post('/update/password', [IndexController::class, 'updatePassword'])->name('update.change.password');




// Admin all routes
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/change/password', [AdminController::class, 'changePassword'])->name('admin.change.password');
Route::post('/admin/update/password', [AdminController::class, 'updatePassword'])->name('admin.update.change.password');
Route::get('/admin/profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
Route::get('/admin/profile/edit', [AdminProfileController::class, 'adminProfileEdit'])->name('admin.profile.edit');
Route::post('/admin/profile/store', [AdminProfileController::class, 'adminProfileStore'])->name('admin.profile.store');

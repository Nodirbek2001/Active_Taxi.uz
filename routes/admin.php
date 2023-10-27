<?php

use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CKEditorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Login and Logout routes
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Admin routes
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {

        Route::get('/', function () {
            return redirect('admin/news');
        });
        // Route::post('projects/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');
        Route::post('news/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');
        // Route::post('services/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');
        // Route::resource('/contacts', ContactController::class);

        // Route::resource('/services', ServiceController::class);
        Route::resource('/news',NewsController::class);
        
        // Route::resource('/projects', ProjectController::class);
    });
});

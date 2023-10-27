<?php

use App\Http\Controllers\Admin\CKEditorController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StaticPagesController;
use voku\helper\ASCII;

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
// web.php
Route::get('/', function () {
    return redirect('/ru');
});
Route::get('/logout', function () {
    return redirect('/ru');
});
Route::get('/test-transliterate', function () {
    return voku\helper\ASCII::to_transliterate("Какой-то текст lekin");
});


Route::middleware(['locale'])->group(function () {
    Route::get('/{locale}', [HomeController::class, 'index'])->name('home')->where('locale', 'uz|ru');
    // Route::get('/{locale}/services/{service}', [HomeController::class, 'show'])->name('show')->where(['locale' => 'uz|ru', 'id' => '[0-9]+']);

    Route::get('/uz/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/uz/register', [RegisterController::class, 'register']);
    // Statik sahifalar uchun route-lar
    Route::get('/{locale}/about', [StaticPagesController::class, 'about'])->name('about')->where('locale', 'uz|ru');
    // Route::get('/{locale}/services', [StaticPagesController::class, 'services'])->name('services')->where('locale', 'uz|ru');
    // boshqa statik sahifalar

    // Dinamik sahifalar uchun route-lar
    // ... boshqa resurslar ...
    // Route::resource('/{locale}/service', ServiceController::class);
    // Route::resource('/{locale}/project', ProjectController::class);
    // Route::resource('/{locale}/news', NewsController::class);

    // Route::get('/{locale}/project/', [ProjectController::class, 'index'])->name('project')->where(['locale' => 'uz|ru']);
    // Route::get('/{locale}/project/{project_name}', [ProjectController::class, 'show'])->name('project.show')->where(['locale' => 'uz|ru', 'project_name' => '[a-zA-Z0-9_-]+']);

    // Route::get('/{locale}/service/', [ServiceController::class, 'index'])->name('services')->where(['locale' => 'uz|ru',]);
    // Route::get('/{locale}/service/{service_name}', [ServiceController::class, 'show'])
    //     ->name('service.show')
    //     ->where(['locale' => 'uz|ru', 'service_name' => '[a-zA-Z0-9_-]+']);

    Route::get('/{locale}/news/', [NewsController::class, 'index'])->name('news_user')->where(['locale' => 'uz|ru',]);
    Route::get('/{locale}/news/{news_name}', [NewsController::class, 'show'])->name('news_user.show')->where(['locale' => 'uz|ru', 'news_name' => '[a-zA-Z0-9_-]+']);
});

Route::get('/switch/{locale}', [LanguageController::class, 'switchLanguage'])->name('locale.switch');


Route::get('/phpinfo', function () {
    phpinfo();
});

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\Dashboard\BourbonController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SiteSettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UniController;
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

   //------------------home routes----------------------

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::name('home.')->group(function () {

    Route::view('/brands', 'home.brands')->name('brands');
    Route::view('/distilleries', 'home.distilleries')->name('distilleries');
    Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/terms-and-conditions', [HomeController::class, 'termsConditions'])->name('terms-conditions');
    Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
    Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
    Route::get('/distilleries', [HomeController::class, 'allDistilleries'])->name('distilleries');

});
Route::get('/bourbon/{slug}', [HomeController::class, 'bourbonDetails'])->name('bourbon');
Route::get('/bourbons', [HomeController::class, 'bourbonFilter'])->name('all.bourbons');
Route::view('/test', 'home.test');

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::controller(AuthController::class)->middleware('loggedin')->group(function () {
    Route::get('login', 'loginView')->name('login.index');
    Route::post('login', 'login')->name('login.check');
    Route::get('register', 'registerView')->name('register.index');
    Route::post('register', 'register')->name('register.store');
});

Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });
    Route::get('privacy-policy', [SiteSettingController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('terms-and-conditions', [SiteSettingController::class, 'termsConditions'])->name('terms-conditions');
    Route::get('email-settings', [SiteSettingController::class, 'emailSettings'])->name('email-settings');
    Route::view('profile', 'dashboard.profile.profile-edit')->name('profile.edit');
    Route::view('password-reset', 'dashboard.profile.password-edit')->name('profile.password');

    Route::get('logout', [DashboardController::class, 'logout'])->name('logout');

    Route::controller(BourbonController::class)->group(function () {
        Route::get('/aromas', 'aromas')->name('aromas');
        Route::get('/flavors', 'flavors')->name('flavors');
        Route::get('/mashbills', 'mashbills')->name('mashbills');
        Route::get('/distilleries', 'distilleries')->name('distilleries');
        Route::get('/categories', 'categories')->name('categories');
        Route::get('/producers', 'producers')->name('producers');
        Route::get('/brands', 'brands')->name('brands');
        Route::get('/states', 'states')->name('states');
        Route::get('/bourbons', 'bourbons')->name('bourbons');
        Route::get('/bourbons/{bourbon:slug}', 'editBourbons')->name('bourbons.edit');
        Route::get('/bourbons/{bourbon:slug}/properties', 'editBourbonsProperties')->name('bourbons.edit.properties');
        Route::get('/bourbons/{bourbon:slug}/gallery', 'editBourbonsGallery')->name('bourbons.edit.gallery');
    });
    Route::post('/pre-signed-url', [UniController::class, 'presignedUploadUrl'])->name('preurl');
});

<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontPagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;

Route::get('/',[FrontPagesController::class, 'index'])->name('index');
Route::get('about',[FrontPagesController::class, 'about'])->name('about');
Route::get('classes',[FrontPagesController::class, 'classes'])->name('classes');
Route::get('contact',[FrontPagesController::class, 'contact'])->name('contact');
Route::get('facility',[FrontPagesController::class, 'facility'])->name('facility');
Route::get('team',[FrontPagesController::class, 'team'])->name('team');
Route::get('callToAction',[FrontPagesController::class, 'callToAction'])->name('callToAction');
Route::get('appointment',[FrontPagesController::class, 'appointment'])->name('appointment');
Route::get('testimonial',[FrontPagesController::class, 'testimonial'])->name('testimonial');
Route::get('error',[FrontPagesController::class, 'error'])->name('error');

Route::prefix('admin')->group(function () {
Route::get('dashBoard',[DashboardController::class, 'dashBoard'])->middleware('verified')->name('dashBoard');

Route::get('login',[DashboardController::class, 'login'])->name('login');
Route::get('register',[DashboardController::class, 'register'])->name('register');
Route::post('register',[DashboardController::class, 'register'])->name('register');
Route::get('tables',[DashboardController::class, 'tables'])->name('tables');
Route::get('forgotPassword',[DashboardController::class, 'forgotPassword'])->name('forgotPassword');
Route::get('eroPage',[DashboardController::class, 'eroPage'])->name('eroPage');
Route::get('blank',[DashboardController::class, 'blank'])->name('blank');
Route::get('buttons',[DashboardController::class, 'buttons'])->name('buttons');
Route::get('cards',[DashboardController::class, 'cards'])->name('cards');
Route::get('charts',[DashboardController::class, 'charts'])->name('charts');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');



});
Auth::routes(['verify'=>true]);
Auth::routes();

 Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
// Route::get('/admin.dashboard', [DashboardController::class, 'index'])->middleware(['auth' , 'verified'])->name('admin.dashboard');
//  Route::get('/admin.index', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.index');
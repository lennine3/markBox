<?php
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

// Route::get('/admin/dashboard','app\Http\Controllers\AdminController@dashboard')->name('dashboard');
// Route::get('/admin', function () {
//     return view('welcome');
// });
// Route::get('/admin/dashboard', [UserController::class, 'index']);

Route::prefix('admin')->middleware(['auth','RegisterAdminMenuServiceProvider'])->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/home','AdminController@homePage')->name('admin.home-setting');
    Route::post('/process-faq','AdminController@processFaqQuestion')->name('admin.process.faq');
});


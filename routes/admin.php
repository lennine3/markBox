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
    Route::get('/banner', 'AdminController@banner')->name('admin.banner');
    Route::post('/banner/upload-video','AdminController@processBannerVideo')->name('admin.banner.video-store');
    Route::post('/banner/upload-image','AdminController@processBannerImage')->name('admin.banner.image-store');
    Route::post('/banner/change-type','AdminController@changeType')->name('admin.banner.change-type');
    Route::get('/home','AdminController@homePage')->name('admin.home-setting');
    Route::get('/home-pricing-{pricingTableData}','AdminController@pricingEdit')->name('admin.edit.pricing-table');
    Route::post('/process-pricing-table','AdminController@processPricingTable')->name('admin.process.pricing-table');
    Route::post('/process-faq','AdminController@processFaqQuestion')->name('admin.process.faq');

    // Home landing page
    Route::post('/home-section-info','AjaxAdminController@processSectionInfo')->name('admin.process.section-info');
    Route::post('/home-web-design','AjaxAdminController@processWebDesign')->name('admin.process.web-design');
});


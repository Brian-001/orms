<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerDashboardController;
use App\Http\Controllers\LandingController;

use Illuminate\Support\Facades\Route;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [LandingController::class, 'index']);

//Routes for commercial types
Route::get('/commercial/resort_gardens', [LandingController::class, 'resortGardensProducts'])->name('commercial.resort_gardens');
Route::get('/commercial/business_stalls', [LandingController::class, 'businessStallsProducts'])->name('commercial.business_stalls');
Route::get('/commercial/warehouses', [LandingController::class, 'warehousesProducts'])->name('commercial.warehouses');
Route::get('/commercial/office_suites', [LandingController::class, 'officeSuitesProducts'])->name('commercial.office_suites');
Route::get('/commercial/land', [LandingController::class, 'landsProducts'])->name('commercial.land');

//Routes for residential types
Route::get('/residential/apartments', [LandingController::class, 'apartmentsProducts'])->name('residential.apartments');
Route::get('/residential/gated_community', [LandingController::class, 'gatedCommunityProducts'])->name('residential.gated_community');
Route::get('/residential/single_houses', [LandingController::class, 'singleHousesProducts'])->name('residential.single_houses');


Route::resource('sellers', SellerDashboardController::class);

Route::resource('products', ProductController::class);

Route::resource('admins', AdminController::class);

Route::get('/faq', function () {
    return view('faq');
})->name('faq');



// Route::get('/admin', 'AdminController@index')->name('admins.index'); // Display all products
// Route::post('/admin/publish/{id}', 'AdminController@publish')->name('admins.publish'); // Publish product
// Route::post('/admin/unpublish/{id}', 'AdminController@unpublish')->name('admins.unpublish'); // Unpublish product







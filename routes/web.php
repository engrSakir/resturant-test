<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VariationCategoryController;
use App\Http\Controllers\VariationController;
use App\Models\ProductCategory;
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

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Route::resource('/branch', BranchController::class);
Route::get('/get-general-static-option-form', [SettingController::class, 'getGeneralStaticForm'])->name('getGeneralStaticForm');
Route::get('/seo-static-option-form', [SettingController::class, 'seoStaticOptionForm'])->name('seoStaticOptionForm');
Route::post('/general-static-option-update', [SettingController::class, 'generalStaticUpdate'])->name('generalStaticUpdate');

Route::group(['middleware' => 'branch'], function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/pos', [DashboardController::class, 'pos'])->name('pos');
    Route::resource('/productCategory', ProductCategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/variation', VariationController::class);
    Route::resource('/variationCategory', VariationCategoryController::class);
    // create blade

    Route::get('/variationCategory/create-with-product/{product_id}', [VariationCategoryController::class, 'createVariationCategoryWithProduct'])->name('createVariationCategoryWithProduct');

    Route::get('/variation-create-based-on-category/{category_id}', [VariationController::class, 'variationCreateBasedOnCategory'])->name('variationCreateBasedOnCategory');

    // controller ajax datatables
    Route::get('/variationCategory-based-on-product/{product_id}', [VariationCategoryController::class, 'variationCategoryBasedOnProduct'])->name('variationCategoryBasedOnProduct');

    Route::get('/variation/create-with-category/{category_id}', [VariationController::class, 'createVariationWithCategory'])->name('createVariationWithCategory');
});

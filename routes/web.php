<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SpecialProductController;
use App\Http\Controllers\VariationCategoryController;
use App\Http\Controllers\VariationController;
use App\Http\Controllers\WebsiteBannerController;
use App\Http\Controllers\WebsiteMessageController;
use App\Http\Controllers\WebsitePromotionController;
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
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('frontend.contactUs');
Route::post('/contact-us-store', [FrontendController::class, 'contactUsStore'])->name('frontend.contactUsStore');

Route::resource('/branch', BranchController::class);
Route::get('/get-general-static-option-form', [SettingController::class, 'getGeneralStaticForm'])->name('getGeneralStaticForm');
Route::get('/seo-static-option-form', [SettingController::class, 'seoStaticOptionForm'])->name('seoStaticOptionForm');
Route::get('/social-link-static-form', [SettingController::class, 'socialLinkStaticForm'])->name('socialLinkStaticForm');
Route::get('/special-product-static-form', [SettingController::class, 'specialProductStaticForm'])->name('specialProductStaticForm');
Route::get('/offer-static-form', [SettingController::class, 'offerStaticForm'])->name('offerStaticForm');
Route::get('/website-banner-form', [SettingController::class, 'websiteBannerForm'])->name('websiteBannerForm');
Route::post('/general-static-option-update', [SettingController::class, 'generalStaticUpdate'])->name('generalStaticUpdate');
Route::post('/seo-static-option-update', [SettingController::class, 'seoStaticOptionUpdate'])->name('seoStaticOptionUpdate');
Route::post('/social-link-static-option-update', [SettingController::class, 'sociallinkStaticOptionUpdate'])->name('sociallinkStaticOptionUpdate');
Route::post('/special-product-static-option-update', [SettingController::class, 'specialProductStaticOptionUpdate'])->name('specialProductStaticOptionUpdate');
Route::post('/offer-static-option-update', [SettingController::class, 'offerStaticOptionUpdate'])->name('offerStaticOptionUpdate');
Route::post('/website-banner-update', [SettingController::class, 'websiteBannerUpdate'])->name('websiteBannerUpdate');

Route::group(['middleware' => 'branch'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/pos', [PosController::class, 'pos'])->name('pos');
    Route::get('/get-variations-by-product/{product_id}', [PosController::class, 'getVariationsByProduct'])->name('getVariationsByProduct');
    Route::resource('/productCategory', ProductCategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/blog', BlogController::class);
    Route::resource('/partner', PartnerController::class);
    Route::resource('/variation', VariationController::class);
    Route::resource('/variationCategory', VariationCategoryController::class);

    // create blade
    Route::get('/variationCategory/create-with-product/{product_id}', [VariationCategoryController::class, 'createVariationCategoryWithProduct'])->name('createVariationCategoryWithProduct');
    Route::get('/variation-create-based-on-category/{category_id}', [VariationController::class, 'variationCreateBasedOnCategory'])->name('variationCreateBasedOnCategory');

    // controller ajax datatables
    Route::get('/variationCategory-based-on-product/{product_id}', [VariationCategoryController::class, 'variationCategoryBasedOnProduct'])->name('variationCategoryBasedOnProduct');
    Route::get('/variation/create-with-category/{category_id}', [VariationController::class, 'createVariationWithCategory'])->name('createVariationWithCategory');
});

Route::resource('/websiteMessage', WebsiteMessageController::class);
Route::resource('/websitePromotion', WebsitePromotionController::class);
Route::resource('/specialProduct', SpecialProductController::class);

<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GlobalImageController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SpecialProductController;
use App\Http\Controllers\VariationCategoryController;
use App\Http\Controllers\VariationController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\WebsiteMessageController;
use App\Http\Controllers\WebsitePromotionController;
use App\Http\Controllers\CustomPageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ExpenseController;
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
Route::get('/blog-detail/{slug}', [FrontendController::class, 'blogDetail'])->name('frontend.blogDetail');
Route::get('/product-detail/{product_id}', [FrontendController::class, 'productDetail'])->name('frontend.productDetail');
Route::get('/product-checkout/{product_id}', [FrontendController::class, 'productCheckout'])->name('frontend.productCheckout');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('frontend.blogs');
Route::get('/faqs', [FrontendController::class, 'faqs'])->name('frontend.faqs');
Route::get('/page/{slug}', [FrontendController::class, 'customPage'])->name('frontend.customPage');
Route::get('/images', [FrontendController::class, 'images'])->name('frontend.images');
Route::post('/contact-us-store', [FrontendController::class, 'contactUsStore'])->name('frontend.contactUsStore');
Route::post('/subscribe/store', [FrontendController::class, 'subscribeStore'])->name('frontend.subscribeStore');


//Route::group(['middleware' => 'auth'], function (){
    Route::resource('/branch', BranchController::class);
    Route::get('/get-general-static-option-form', [SettingController::class, 'getGeneralStaticForm'])->name('getGeneralStaticForm');
    Route::get('/seo-static-option-form', [SettingController::class, 'seoStaticOptionForm'])->name('seoStaticOptionForm');
    Route::get('/social-link-static-form', [SettingController::class, 'socialLinkStaticForm'])->name('socialLinkStaticForm');
    Route::get('/special-product-static-form', [SettingController::class, 'specialProductStaticForm'])->name('specialProductStaticForm');
    Route::get('/offer-static-form', [SettingController::class, 'offerStaticForm'])->name('offerStaticForm');
    Route::get('/app-static-form', [SettingController::class, 'appStaticForm'])->name('appStaticForm');
    Route::get('/blog-static-form', [SettingController::class, 'blogStaticForm'])->name('blogStaticForm');
    Route::get('/facebook-static-form', [SettingController::class, 'facebookStaticForm'])->name('facebookStaticForm');
    Route::get('/gallery-static-form', [SettingController::class, 'galleryStaticForm'])->name('galleryStaticForm');
    Route::get('/other-static-form', [SettingController::class, 'otherStaticForm'])->name('otherStaticForm');
    Route::get('/website-banner-form', [SettingController::class, 'websiteBannerForm'])->name('websiteBannerForm');


    Route::post('/general-static-option-update', [SettingController::class, 'generalStaticUpdate'])->name('generalStaticUpdate');
    Route::post('/seo-static-option-update', [SettingController::class, 'seoStaticOptionUpdate'])->name('seoStaticOptionUpdate');
    Route::post('/social-link-static-option-update', [SettingController::class, 'sociallinkStaticOptionUpdate'])->name('sociallinkStaticOptionUpdate');
    Route::post('/special-product-static-option-update', [SettingController::class, 'specialProductStaticOptionUpdate'])->name('specialProductStaticOptionUpdate');
    Route::post('/offer-static-option-update', [SettingController::class, 'offerStaticOptionUpdate'])->name('offerStaticOptionUpdate');
    Route::post('/blog-static-option-update', [SettingController::class, 'blogStaticOptionUpdate'])->name('blogStaticOptionUpdate');
    Route::post('/facebook-static-option-update', [SettingController::class, 'facebookStaticOptionUpdate'])->name('facebookStaticOptionUpdate');
    Route::post('/gallery-static-option-update', [SettingController::class, 'galleryStaticOptionUpdate'])->name('galleryStaticOptionUpdate');
    Route::post('/other-static-option-update', [SettingController::class, 'otherStaticOptionUpdate'])->name('otherStaticOptionUpdate');
    Route::post('/app-static-option-update', [SettingController::class, 'appStaticOptionUpdate'])->name('appStaticOptionUpdate');
    Route::post('/website-banner-update', [SettingController::class, 'websiteBannerUpdate'])->name('websiteBannerUpdate');

    Route::group(['middleware' => 'branch'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::post('profile-password-update', [ProfileController::class, 'profilePasswordUpdate'])->name('profilePasswordUpdate');
        Route::get('/pos', [PosController::class, 'pos'])->name('pos');
        Route::post('/pos-store', [PosController::class, 'posStore'])->name('posStore');
        Route::get('/get-variations-by-product/{product_id}', [PosController::class, 'getVariationsByProduct'])->name('getVariationsByProduct');
        Route::resource('productCategory', ProductCategoryController::class);
        Route::resource('product', ProductController::class);
        Route::resource('blog', BlogController::class);
        Route::resource('invoice', InvoiceController::class);
        Route::resource('partner', PartnerController::class);
        Route::resource('variation', VariationController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('subscriber', SubscriberController::class);
        Route::resource('customPage', CustomPageController::class);
        Route::resource('faq', FaqController::class);
        Route::resource('expenseCategory', ExpenseCategoryController::class);
        Route::resource('expense', ExpenseController::class);
        Route::resource('variationCategory', VariationCategoryController::class);
        Route::resource('globalImage', GlobalImageController::class);
        Route::resource('websiteMessage', WebsiteMessageController::class);
        Route::resource('websitePromotion', WebsitePromotionController::class);
        Route::resource('specialProduct', SpecialProductController::class);
        Route::resource('user', UserController::class);
        Route::resource('table', TableController::class);

        // create blade
        Route::get('/variationCategory/create-with-product/{product_id}', [VariationCategoryController::class, 'createVariationCategoryWithProduct'])->name('createVariationCategoryWithProduct');
        Route::get('/variation-create-based-on-category/{category_id}', [VariationController::class, 'variationCreateBasedOnCategory'])->name('variationCreateBasedOnCategory');

        // controller ajax datatables
        Route::get('/variationCategory-based-on-product/{product_id}', [VariationCategoryController::class, 'variationCategoryBasedOnProduct'])->name('variationCategoryBasedOnProduct');
        Route::get('/variation/create-with-category/{category_id}', [VariationController::class, 'createVariationWithCategory'])->name('createVariationWithCategory');
    });
//});

require __DIR__.'/auth.php';

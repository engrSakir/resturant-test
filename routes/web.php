<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SettingController;
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
Route::post('/general-static-option-update', [SettingController::class, 'generalStaticUpdate'])->name('generalStaticUpdate');

Route::group(['middleware' => 'branch'], function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});

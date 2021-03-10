<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('templates.backend.index');
});
Route::get('/advanced-ui-kits-image-crop', function () {
    return view('templates.backend.advanced-ui-kits-image-crop');
});
Route::get('/advanced-ui-kits-jquery-confirm', function () {
    return view('templates.backend.advanced-ui-kits-jquery-confirm');
});
Route::get('/advanced-ui-kits-nestable', function () {
    return view('templates.backend.advanced-ui-kits-nestable');
});
Route::get('/advanced-ui-kits-pnotify', function () {
    return view('templates.backend.advanced-ui-kits-pnotify');
});
Route::get('/advanced-ui-kits-range-slider', function () {
    return view('templates.backend.advanced-ui-kits-range-slider');
});
Route::get('/advanced-ui-kits-ratings', function () {
    return view('templates.backend.advanced-ui-kits-ratings');
});
Route::get('/advanced-ui-kits-session-timeout', function () {
    return view('templates.backend.advanced-ui-kits-session-timeout');
});
Route::get('/advanced-ui-kits-sweet-alerts', function () {
    return view('templates.backend.advanced-ui-kits-sweet-alerts');
});
Route::get('/advanced-ui-kits-switchery', function () {
    return view('templates.backend.advanced-ui-kits-switchery');
});
Route::get('/advanced-ui-kits-toolbar', function () {
    return view('templates.backend.advanced-ui-kits-toolbar');
});
Route::get('/advanced-ui-kits-tour', function () {
    return view('templates.backend.advanced-ui-kits-tour');
});
Route::get('/advanced-ui-kits-treeview', function () {
    return view('templates.backend.advanced-ui-kits-treeview');
});
Route::get('/apps-calender', function () {
    return view('templates.backend.apps-calender');
});
Route::get('/apps-chat', function () {
    return view('templates.backend.apps-chat');
});
Route::get('/apps-email-compose', function () {
    return view('templates.backend.apps-email-compose');
});
Route::get('/apps-email-inbox', function () {
    return view('templates.backend.apps-email-inbox');
});
Route::get('/apps-email-open', function () {
    return view('templates.backend.apps-email-open');
});
Route::get('/apps-kanban-board', function () {
    return view('templates.backend.apps-kanban-board');
});
Route::get('/apps-onboarding-screens', function () {
    return view('templates.backend.apps-onboarding-screens');
});
Route::get('/basic-ui-kits-alerts', function () {
    return view('templates.backend.basic-ui-kits-alerts');
});
Route::get('/basic-ui-kits-badges', function () {
    return view('templates.backend.basic-ui-kits-badges');
});
Route::get('/basic-ui-kits-buttons', function () {
    return view('templates.backend.basic-ui-kits-buttons');
});
Route::get('/basic-ui-kits-cards', function () {
    return view('templates.backend.basic-ui-kits-cards');
});
Route::get('/basic-ui-kits-carousel', function () {
    return view('templates.backend.basic-ui-kits-carousel');
});
Route::get('/basic-ui-kits-collapse', function () {
    return view('templates.backend.basic-ui-kits-collapse');
});
Route::get('/basic-ui-kits-dropdowns', function () {
    return view('templates.backend.basic-ui-kits-dropdowns');
});
Route::get('/basic-ui-kits-embeds', function () {
    return view('templates.backend.basic-ui-kits-embeds');
});
Route::get('/basic-ui-kits-grids', function () {
    return view('templates.backend.basic-ui-kits-grids');
});
Route::get('/basic-ui-kits-images', function () {
    return view('templates.backend.basic-ui-kits-images');
});
Route::get('/basic-ui-kits-media', function () {
    return view('templates.backend.basic-ui-kits-media');
});
Route::get('/basic-ui-kits-modals', function () {
    return view('templates.backend.basic-ui-kits-modals');
});
Route::get('/basic-ui-kits-paginations', function () {
    return view('templates.backend.basic-ui-kits-paginations');
});
Route::get('/basic-ui-kits-popovers', function () {
    return view('templates.backend.basic-ui-kits-popovers');
});
Route::get('/basic-ui-kits-progressbars', function () {
    return view('templates.backend.basic-ui-kits-progressbars');
});
Route::get('/basic-ui-kits-spinners', function () {
    return view('templates.backend.basic-ui-kits-spinners');
});
Route::get('/basic-ui-kits-tabs', function () {
    return view('templates.backend.basic-ui-kits-tabs');
});
Route::get('/basic-ui-kits-toasts', function () {
    return view('templates.backend.basic-ui-kits-toasts');
});
Route::get('/basic-ui-kits-tooltips', function () {
    return view('templates.backend.basic-ui-kits-tooltips');
});
Route::get('/basic-ui-kits-typography', function () {
    return view('templates.backend.basic-ui-kits-typography');
});
Route::get('/chart-c3', function () {
    return view('templates.backend.chart-c3');
});
Route::get('/chart-chartistjs', function () {
    return view('templates.backend.chart-chartistjs');
});
Route::get('/chart-chartjs', function () {
    return view('templates.backend.chart-chartjs');
});
Route::get('/chart-flot', function () {
    return view('templates.backend.chart-flot');
});
Route::get('/chart-knob', function () {
    return view('templates.backend.chart-knob');
});
Route::get('/chart-morris', function () {
    return view('templates.backend.chart-morris');
});
Route::get('/chart-piety', function () {
    return view('templates.backend.chart-piety');
});
Route::get('/chart-sparkline', function () {
    return view('templates.backend.chart-sparkline');
});
Route::get('/dashboard-analytics', function () {
    return view('templates.backend.dashboard-analytics');
});
Route::get('/dashboard-ecommerce', function () {
    return view('templates.backend.dashboard-ecommerce');
});
Route::get('/ecommerce-cart', function () {
    return view('templates.backend.ecommerce-cart');
});
Route::get('/ecommerce-checkout', function () {
    return view('templates.backend.ecommerce-checkout');
});
Route::get('/ecommerce-myaccount', function () {
    return view('templates.backend.ecommerce-myaccount');
});
Route::get('/ecommerce-order-detail', function () {
    return view('templates.backend.ecommerce-order-detail');
});
Route::get('/ecommerce-order-list', function () {
    return view('templates.backend.ecommerce-order-list');
});
Route::get('/ecommerce-product-detail', function () {
    return view('templates.backend.ecommerce-product-detail');
});
Route::get('/ecommerce-product-list', function () {
    return view('templates.backend.ecommerce-product-list');
});
Route::get('/ecommerce-shop', function () {
    return view('templates.backend.ecommerce-shop');
});
Route::get('/ecommerce-single-product', function () {
    return view('templates.backend.ecommerce-single-product');
});
Route::get('/ecommerce-thankyou', function () {
    return view('templates.backend.ecommerce-thankyou');
});
Route::get('/error-404', function () {
    return view('templates.backend.error-404');
});
Route::get('/error-500', function () {
    return view('templates.backend.error-500');
});
Route::get('/error-comingsoon', function () {
    return view('templates.backend.error-comingsoon');
});
Route::get('/error-maintenance', function () {
    return view('templates.backend.error-maintenance');
});
Route::get('/form-colorpickers', function () {
    return view('templates.backend.form-colorpickers');
});
Route::get('/form-datepickers', function () {
    return view('templates.backend.form-datepickers');
});
Route::get('/form-editors', function () {
    return view('templates.backend.form-editors');
});
Route::get('/form-file-uploads', function () {
    return view('templates.backend.form-file-uploads');
});
Route::get('/form-groups', function () {
    return view('templates.backend.form-groups');
});
Route::get('/form-input-mask', function () {
    return view('templates.backend.form-input-mask');
});
Route::get('/form-inputs', function () {
    return view('templates.backend.form-inputs');
});
Route::get('/form-layouts', function () {
    return view('templates.backend.form-layouts');
});
Route::get('/form-maxlength', function () {
    return view('templates.backend.form-maxlength');
});
Route::get('/form-selects', function () {
    return view('templates.backend.form-selects');
});
Route::get('/form-touchspin', function () {
    return view('templates.backend.form-touchspin');
});
Route::get('/form-validations', function () {
    return view('templates.backend.form-validations');
});
Route::get('/form-wizards', function () {
    return view('templates.backend.form-wizards');
});
Route::get('/form-xeditable', function () {
    return view('templates.backend.form-xeditable');
});
Route::get('/icon-dripicons', function () {
    return view('templates.backend.icon-dripicons');
});
Route::get('/icon-feather', function () {
    return view('templates.backend.icon-feather');
});
Route::get('/icon-flag', function () {
    return view('templates.backend.icon-flag');
});
Route::get('/icon-font-awesome', function () {
    return view('templates.backend.icon-font-awesome');
});
Route::get('/icon-ionicons', function () {
    return view('templates.backend.icon-ionicons');
});
Route::get('/icon-line-awesome', function () {
    return view('templates.backend.icon-line-awesome');
});
Route::get('/icon-material-design', function () {
    return view('templates.backend.icon-material-design');
});
Route::get('/icon-simple-line', function () {
    return view('templates.backend.icon-simple-line');
});
Route::get('/icon-socicon', function () {
    return view('templates.backend.icon-socicon');
});
Route::get('/icon-themify', function () {
    return view('templates.backend.icon-themify');
});
Route::get('/icon-theta', function () {
    return view('templates.backend.icon-theta');
});
Route::get('/icon-typicons', function () {
    return view('templates.backend.icon-typicons');
});
Route::get('/map-google', function () {
    return view('templates.backend.map-google');
});
Route::get('/map-vector', function () {
    return view('templates.backend.map-vector');
});
Route::get('/page-blog', function () {
    return view('templates.backend.page-blog');
});
Route::get('/page-faq', function () {
    return view('templates.backend.page-faq');
});
Route::get('/page-gallery', function () {
    return view('templates.backend.page-gallery');
});
Route::get('/page-invoice', function () {
    return view('templates.backend.page-invoice');
});
Route::get('/page-pricing', function () {
    return view('templates.backend.page-pricing');
});
Route::get('/page-starter', function () {
    return view('templates.backend.page-starter');
});
Route::get('/page-timeline', function () {
    return view('templates.backend.page-timeline');
});
Route::get('/table-bootstrap', function () {
    return view('templates.backend.table-bootstrap');
});
Route::get('/table-datatable', function () {
    return view('templates.backend.table-datatable');
});
Route::get('/table-editable', function () {
    return view('templates.backend.table-editable');
});
Route::get('/table-footable', function () {
    return view('templates.backend.table-footable');
});
Route::get('/table-rwdtable', function () {
    return view('templates.backend.table-rwdtable');
});
Route::get('/user-forgotpsw', function () {
    return view('templates.backend.user-forgotpsw');
});
Route::get('/user-lock-screen', function () {
    return view('templates.backend.user-lock-screen');
});
Route::get('/user-login', function () {
    return view('templates.backend.user-login');
});
Route::get('/user-register', function () {
    return view('templates.backend.user-register');
});
Route::get('/widgets', function () {
    return view('templates.backend.widgets');
});

<?php

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

Route::get('/clear-cache', function () {
    $output = [];
    \Artisan::call('optimize:clear', $output);
    dd($output);
});

Route::get('/', function () {
    return "view('welcome')";
});

// Site Routes
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'namespace' => 'App\Http\Controllers\Site',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...
        Route::get('/', 'HomeController@index');
        Route::get('product', 'ProductController@index');
        Route::get('cart', 'CartController@index');
        Route::get('profile', 'ProfileController@index');
        Route::get('/seller', 'HomeController@seller_page');
        Route::get('/contact', 'HomeController@contact');
        Route::get('/wishlist', 'HomeController@wishlist');
        Route::get('/notifications', 'HomeController@notifications');


        //Vendor
        Route::get('/register_seller', 'HomeController@register_seller');
        Route::get('/steps_register_seller', 'HomeController@steps_register_seller');

        //User
        Route::get('/login_user', 'HomeController@login_user');
        Route::get('/register_user', 'HomeController@register_user');
    }
);

Auth::routes();

// Admin Routes
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'namespace' => 'App\Http\Controllers\Dashborad',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']
    ],
    function () { //...

        //Routs For Admin Dashborad
        Route::get('/home', 'HomeController@index');
        Route::get('/update_statistics/{type}/{duration}', 'HomeController@update_statistics');
        Route::get('/update_branches_statistics/{branche}', 'HomeController@update_branches_statistics');
        Route::get('/follow_screen', 'HomeController@follow_screen');


        //Admin
        Route::get('/managers/{id}/edit', 'UserController@edit');
        Route::post('/managers/{id}', 'UserController@update');
        Route::get('/managers/{id}/edit_password', 'UserController@edit_password');
        Route::post('/managers/{id}/edit_password', 'UserController@update_password');


        //Roles
        Route::resource('roles', 'RolesController');
        Route::get('/role/{id}/edit', 'RolesController@edit');
        Route::post('/role/{id}', 'RolesController@update');
        Route::delete('role/{id}', 'RolesController@destroy');

        //SubAdmins 
        Route::get('/sub_admins', 'SubadminController@index');
        Route::post('/sub_admins', 'SubadminController@store');
        Route::get('/sub_admin/{id}/edit', 'SubadminController@edit');
        Route::post('/sub_admin/{id}', 'SubadminController@update');
        Route::delete('sub_admin/{id}', 'SubadminController@destroy');

        // Explain
        // 1. vendors(index)  2./vendors/create(get)  3./vendors(post_(store))
        // 4./vendors/{vendor}/edit(edit_get)   5./vendors/{vendor}(update)   6./vendors/{vendor}(delete)

        //Vendors 
        Route::resource('vendors', VendorController::class);
        Route::post('/vendor/{id}', 'VendorController@update');
        Route::get('/change_status_vendor', 'VendorController@change_status');
        Route::post('/change_active_vendor_status', 'VendorController@change_active_vendor_status');
        Route::get('delete_vendor/{id}', 'VendorController@delete_vendor');
        Route::get('portfolio/{id}', 'VendorController@portfolio');
        Route::get('/taxs/{id}', 'VendorController@taxs');
        Route::post('/withdraw_balance', 'VendorController@withdraw_balance');
        Route::post('/reject_vendor', 'VendorController@reject_vendor')->name('reject_vendor');
        Route::get('/technical_support', 'VendorController@technical_support');
        Route::get('/calculate_system_commission', 'VendorController@calculate_system_commission')->name('calculate_system_commission');
        Route::get('/collection_system_commission', 'VendorController@collection_system_commission')->name('collection_system_commission');
        Route::get('documents/{id}', 'VendorController@documents');


        //Stores 
        Route::resource('stores', StoreController::class);
        Route::post('/store/{id}', 'StoreController@update');
        Route::get('delete_store/{id}', 'StoreController@delete_store');
        Route::get('stores_vendor', 'StoreController@stores_vendor');
        Route::get('stores_vendor', 'StoreController@stores_vendor');
        Route::get('vendor_store/{id}', 'StoreController@vendor_store');
        Route::post('store_stores_vendor', 'StoreController@store_stores_vendor');
        Route::post('return_trader', 'StoreController@return_trader')->name('return_trader');
        Route::post('extra_space', 'StoreController@extra_space');

        
        //Vendors Categories 
        Route::resource('vendors_categories', VendorsCategoryController::class);
        Route::post('/vendor_category/{id}', 'VendorsCategoryController@update');

        
        //Booking Orders
        Route::resource('booking_orders', BookingOrdersController::class);
        Route::get('/storage_spaces', 'BookingOrdersController@storage_spaces');
        Route::get('/change_status_booking_order', 'BookingOrdersController@change_status_booking_order');
        Route::get('/change_status_booking', 'BookingOrdersController@change_status');
        Route::post('/cancel_booking_order_form_store', 'BookingOrdersController@cancel_booking_order_form_store')->name('cancel_booking_order_form_store');
        Route::post('/cancel_booking_orders', 'BookingOrdersController@cancel_booking_orders')->name('cancel_booking_orders');
        Route::get('/details_booking_orders/{id}', 'BookingOrdersController@details_booking_orders');
        Route::post('/show_many_to_store', 'BookingOrdersController@show_many_to_store')->name('show_many_to_store');
        Route::get('/return_order_store', 'BookingOrdersController@return_order_store');
        Route::get('/change_status_return_order', 'BookingOrdersController@change_status_return_order');
        Route::post('/cancel_return_orders', 'BookingOrdersController@cancel_return_orders')->name('cancel_return_orders');
        Route::get('extra_space', 'BookingOrdersController@extra_space');
        Route::get('/change_status_extra_spaces', 'BookingOrdersController@change_status_extra_spaces');
        Route::post('/cancel_extra_space', 'BookingOrdersController@cancel_extra_space')->name('cancel_extra_space');

        //Branches
        Route::resource('branches', BrancheController::class);
        Route::post('/branche/{id}', 'BrancheController@update');
        Route::get('get_branches/{store_id}', 'BrancheController@get_branches');


        //Users 
        Route::resource('clients', ClientController::class);
        Route::post('/client/{id}', 'ClientController@update');
        Route::get('/export_pdf_users', 'ClientController@export_pdf_users');
        Route::get('/change_status_client', 'ClientController@change_status');
        Route::get('delete_user/{id}', 'ClientController@delete_user');

        //Main Categories  
        Route::resource('categories', CategoriesController::class);
        Route::post('/category/{id}', 'CategoriesController@update');

        //Sub Categories 
        Route::resource('sub_categories', SubCategoriesController::class);
        Route::post('/sub_category/{id}', 'SubCategoriesController@update');

        //Sub Sub Categories 
        Route::resource('sub_sub_categories', Sub_SubCategoriesController::class);
        Route::post('/sub_sub_category/{id}', 'Sub_SubCategoriesController@update');

        //Orders 
        Route::resource('orders', OrderController::class);
        Route::post('/orders/{id}', 'OrderController@update');
        Route::get('/convert_order/{id}/{vendor_id}', 'OrderController@convert_order');
        Route::get('/export_pdf_order/{id}', 'OrderController@export_pdf_order');
        Route::post('/cancel_order', 'OrderController@cancel_order')->name('cancel_order');
        Route::get('warranty_disclosure', 'OrderController@warranty_disclosure')->name('warranty_disclosure');
        Route::get('/change_status_order', 'OrderController@change_status');
        Route::get('/calculate_taxs', 'OrderController@calculate_taxs')->name('calculate_taxs');
        Route::get('/collection_taxs', 'OrderController@collection_taxs')->name('collection_taxs');
        Route::get('/search_warranty/{order_no}', 'OrderController@search_warranty');
        Route::get('/nour/{value}', 'OrderController@search_warranty_products');
        Route::get('/get_all_warrantly', 'OrderController@get_all_warrantly');


        //Advertisments
        Route::resource('advertisments', AdvertismentController::class);
        Route::post('/advertisment/{id}', 'AdvertismentController@update');
        Route::get('/change_promotion_product', 'AdvertismentController@change_promotion_product');

        //products
        Route::resource('products', ProductController::class);
        Route::post('/product/{id}', 'ProductController@update');
        Route::get('/change_status_product', 'ProductController@change_status');
        Route::post('/cancel_product', 'ProductController@cancel_product')->name('cancel_product');
        Route::get('/return_product/{id}', 'ProductController@return_product');
        Route::get('/search_products/{value}', 'ProductController@search_products');
        Route::get('/create_product/{id}', 'ProductController@create_product');
        Route::post('/store_product', 'ProductController@store_product')->name('store_product');
        Route::post('/update_product_vendor/{id}', 'ProductController@update_product_vendor')->name('update_product_vendor');
        Route::get('/vendor_status_product', 'ProductController@vendor_status_product')->name('vendor_status_product');
        Route::get('get_sub_category/{category_id}', 'ProductController@get_sub_category');
        Route::get('get_sub_sub_category/{category_id}', 'ProductController@get_sub_sub_category');
        Route::get('/make_promotion_product/{id}', 'ProductController@make_promotion_product');
        Route::post('move_store', 'ProductController@move_store')->name('move_store');
        Route::get('move_products_store/{arr}', 'ProductController@move_products_store')->name('move_products_store');
        Route::post('move_products_store', 'ProductController@move_products');

        //Chats
        Route::resource('chats', ChatController::class);
        Route::post('/send_message', 'ChatController@store')->name('send_message');

        //Points
        Route::resource('points', VendorPointController::class);

        //Countries 
        Route::get('/countries', 'CountryController@index');


        //Shipping Companies
        Route::resource('shipping_companies', ShippingCompaniesController::class);
        Route::post('/shipping_company/{id}', 'ShippingCompaniesController@update');

        //Settings
        Route::get('/settings', 'SettingController@index');
        Route::post('/settings', 'SettingController@update');
        Route::get('/system_info', 'SettingController@system_info');
        Route::post('/system_info', 'SettingController@store_system_info');
        Route::post('/store_system_info_stores', 'SettingController@store_system_info_stores');

        //invoices
        Route::get('/calculate_monthly_invoice', 'InvoiceController@calculate_monthly_invoice')->name('calculate_monthly_invoice');
        Route::get('/collection_monthly_invoice', 'InvoiceController@collection_monthly_invoice')->name('collection_monthly_invoice');
    
        //Income List
        Route::get('/income_list', 'IncomeController@index');
        Route::get('/export_excel/{id}', 'IncomeController@export_excel');
        Route::post('/filter_invoices', 'IncomeController@filter_invoices')->name('filter_invoices');


    }
);
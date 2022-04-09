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

// Route::get('/', function () {
//     return view('Dashboard.index');
// });


//Routes for "ADMINS" only
Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    
    // Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('roles');
    // Route::get('/filestorage', [App\Http\Controllers\FilestorageController::class, 'index'])->name('home');
    Route::get('/admin_accounts', [App\Http\Controllers\AdminController::class, 'index'])->name('adminaccounts');
    Route::post('/add_admin', [App\Http\Controllers\AdminController::class, 'adduser'])->name('add-admin');
    Route::get('/admin/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin_edit');
    Route::post('/admin/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin_update');
    Route::get('/admin/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('admin_delete');
    
    Route::get('/user_accounts', [App\Http\Controllers\UsersController::class, 'index'])->name('usercontroller');
    Route::post('/add_user', [App\Http\Controllers\UsersController::class, 'adduser'])->name('add-user');
    Route::get('/user/edit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])->name('user_edit');
    Route::post('/user/update/{id}', [App\Http\Controllers\UsersController::class, 'update'])->name('user_update');
    Route::get('/user/delete/{id}', [App\Http\Controllers\UsersController::class, 'delete'])->name('user_delete');
    
    Route::get('/app_settings', [App\Http\Controllers\AppSettingsController::class, 'index'])->name('app_settings');
    Route::post('/app_settings/update/{id}', [App\Http\Controllers\AppSettingsController::class, 'update'])->name('app_settings_update');
    Route::get('/app_settings/rlogo/{id}', [App\Http\Controllers\AppSettingsController::class, 'rlogo'])->name('app_settings_remove_logo');
    
    Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index'])->name('staff');
    Route::get('/staff/add', [App\Http\Controllers\StaffController::class, 'add'])->name('staff_add');
    Route::post('/staff/save', [App\Http\Controllers\StaffController::class, 'save'])->name('staff_save');
    Route::get('/staff/edit/{id}', [App\Http\Controllers\StaffController::class, 'edit'])->name('staff_edit');
    Route::post('/staff/update/{id}', [App\Http\Controllers\StaffController::class, 'update'])->name('staff_update');
    Route::get('/staff/delete/{id}', [App\Http\Controllers\StaffController::class, 'delete'])->name('staff_delete');

    
    
    
});



//Routes for "ADMINS" and "USERS" only
Route::group(['middleware' => ['auth', 'role:User|Admin']], function () {
    
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
    
    
    Route::get('/salesandreports', [App\Http\Controllers\SalesreportController::class, 'index'])->name('salesandreports');
    Route::get('/salesandreports/addsale', [App\Http\Controllers\SalesreportController::class, 'addsale'])->name('salesandreports_addsale');
    Route::get('/salesandreports/addexpense', [App\Http\Controllers\SalesreportController::class, 'addexpense'])->name('salesandreports_addexpense');
    Route::post('/salesandreports/save', [App\Http\Controllers\SalesreportController::class, 'save'])->name('salesandreports_addexpense');
    Route::get('/salesandreports/edit/{id}', [App\Http\Controllers\SalesreportController::class, 'edit'])->name('salesandreports_edit');
    Route::post('/salesandreports/update/{id}', [App\Http\Controllers\SalesreportController::class, 'update'])->name('salesandreports_update');
    Route::get('/salesandreports/delete/{id}', [App\Http\Controllers\SalesreportController::class, 'delete'])->name('salesandreports_delete');
    
    Route::get('/suppliers', [App\Http\Controllers\SuppliersController::class, 'index'])->name('suppliers');
    Route::get('/suppliers/add', [App\Http\Controllers\SuppliersController::class, 'add'])->name('suppliers_add');
    Route::post('/suppliers/save', [App\Http\Controllers\SuppliersController::class, 'save'])->name('suppliers_save');
    Route::get('/suppliers/edit/{id}', [App\Http\Controllers\SuppliersController::class, 'edit'])->name('suppliers_edit');
    Route::post('/suppliers/update/{id}', [App\Http\Controllers\SuppliersController::class, 'update'])->name('suppliers_update');
    Route::get('/suppliers/delete/{id}', [App\Http\Controllers\SuppliersController::class, 'delete'])->name('suppliers_delete');
    
    Route::get('/supplier_payout', [App\Http\Controllers\SupplierpayoutController::class, 'index'])->name('supplierpo');
    Route::get('/supplier_payout/add', [App\Http\Controllers\SupplierpayoutController::class, 'add'])->name('supplierpo_add');
    Route::post('/supplier_payout/save', [App\Http\Controllers\SupplierpayoutController::class, 'save'])->name('supplierpo_save');
    Route::get('/supplier_payout/edit/{id}', [App\Http\Controllers\SupplierpayoutController::class, 'edit'])->name('supplierpo_edit');
    Route::post('/supplier_payout/update/{id}', [App\Http\Controllers\SupplierpayoutController::class, 'update'])->name('supplierpo_update');
    Route::get('/supplier_payout/delete/{id}', [App\Http\Controllers\SupplierpayoutController::class, 'delete'])->name('supplierpo_delete');
    
    Route::get('/supplier_weekly', [App\Http\Controllers\SupplierpayoutController::class, 'weekly'])->name('supplier_weekly');
    
    Route::get('/staff_wages', [App\Http\Controllers\StaffwagesController::class, 'index'])->name('staff');
    Route::get('/staff_wages/add', [App\Http\Controllers\StaffwagesController::class, 'add'])->name('staff_add');
    Route::post('/staff_wages/save', [App\Http\Controllers\StaffwagesController::class, 'save'])->name('staff_save');
    Route::get('/staff_wages/edit/{id}', [App\Http\Controllers\StaffwagesController::class, 'edit'])->name('staff_edit');
    Route::post('/staff_wages/update/{id}', [App\Http\Controllers\StaffwagesController::class, 'update'])->name('staff_update');
    Route::get('/staff_wages/delete/{id}', [App\Http\Controllers\StaffwagesController::class, 'delete'])->name('staff_delete');

    Route::get('/staff_payout', [App\Http\Controllers\StaffPayoutController::class, 'index'])->name('staffpo');
    Route::get('/staff_payout/add', [App\Http\Controllers\StaffpayoutController::class, 'add'])->name('staffpo_add');
    Route::post('/staff_payout/save', [App\Http\Controllers\StaffpayoutController::class, 'save'])->name('staffpo_save');
    Route::get('/staff_payout/edit/{id}', [App\Http\Controllers\StaffpayoutController::class, 'edit'])->name('staffpo_edit');
    Route::post('/staff_payout/update/{id}', [App\Http\Controllers\StaffpayoutController::class, 'update'])->name('staffpo_update');
    Route::get('/staff_payout/delete/{id}', [App\Http\Controllers\StaffpayoutController::class, 'delete'])->name('staffpo_delete');
    
    Route::get('/invoices', [App\Http\Controllers\InvoicesController::class, 'index'])->name('invoices');
    Route::get('/invoices/add', [App\Http\Controllers\InvoicesController::class, 'add'])->name('invoices_add');
    Route::post('/invoices/save', [App\Http\Controllers\InvoicesController::class, 'save'])->name('invoices_save');
    Route::get('/invoices/edit/{id}', [App\Http\Controllers\InvoicesController::class, 'edit'])->name('invoices_edit');
    Route::post('/invoices/update/{id}', [App\Http\Controllers\InvoicesController::class, 'update'])->name('invoices_update');
    Route::get('/invoices/delete/{id}', [App\Http\Controllers\InvoicesController::class, 'delete'])->name('invoices_delete');
    
    Route::get('/invoices/{id}', [App\Http\Controllers\InvoicesController::class, 'view'])->name('invoices_view');
    
    Route::get('/quote', [App\Http\Controllers\QuoteController::class, 'index'])->name('quote');
    Route::get('/quote/add', [App\Http\Controllers\QuoteController::class, 'add'])->name('quote_add');
    Route::post('/quote/save', [App\Http\Controllers\QuoteController::class, 'save'])->name('quote_save');
    Route::get('/quote/edit/{id}', [App\Http\Controllers\QuoteController::class, 'edit'])->name('quote_edit');
    Route::post('/quote/update/{id}', [App\Http\Controllers\QuoteController::class, 'update'])->name('quote_update');
    Route::get('/quote/delete/{id}', [App\Http\Controllers\QuoteController::class, 'delete'])->name('quote_delete');
    
    Route::get('/quote/{id}', [App\Http\Controllers\QuoteController::class, 'view'])->name('Quote_view');

    Route::get('calander', [App\Http\Controllers\CalenderController::class, 'index']);
    Route::post('fullcalenderAjax', [App\Http\Controllers\CalenderController::class, 'ajax']);
    



});

Auth::routes();


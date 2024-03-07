<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;        use App\Models\Customer;
use App\Http\Controllers\CategoryController;        use App\Models\Category;
use App\Http\Controllers\LeadController;            use App\Models\Lead;
use App\Http\Controllers\Auth\RegisterController;        
use App\Http\Controllers\Auth\LoginController;        

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


Auth::routes();
Route::get  ('user/register',               [RegisterController::class, 'register']);

Route::get  ('/dashboard',                  [DashboardController::class, 'dashboard']);

Route::get  ('/customer/index',             [CustomerController::class, 'index']);
Route::get  ('/customer/delete/{id}',       [CustomerController::class, 'delete']);
Route::get  ('/customer/create',            [CustomerController::class, 'create']);
Route::get  ('/customer/status/{id}',       [CustomerController::class, 'status']);
Route::get  ('/customer/edit{id}',          [CustomerController::class, 'edit']);
Route::get  ('/customer/update{id}',        [CustomerController::class, 'update']);
Route::get  ('/customer/store',             [CustomerController::class, 'store']);

Route::get  ('/category/index',             [CategoryController::class, 'index']);
Route::get  ('/category/delete/{id}',       [CategoryController::class, 'delete']);
Route::get  ('/category/create',            [CategoryController::class, 'create']);
Route::get  ('/category/status/{id}',       [CategoryController::class, 'status']);
Route::get  ('/category/edit/{id}',          [CategoryController::class, 'edit']);
Route::get  ('/category/update/{id}',        [CategoryController::class, 'update']);
Route::get  ('/category/store',             [CategoryController::class, 'store']);

Route::get  ('/lead/index',             [LeadController::class, 'index']);
Route::get  ('/lead/delete/{id}',       [LeadController::class, 'delete']);
Route::get  ('/lead/create',            [LeadController::class, 'create']);
Route::get  ('/lead/status/{id}',       [LeadController::class, 'status']);
Route::get  ('/lead/edit/{id}',          [LeadController::class, 'edit']);
Route::get  ('/lead/update/{id}',        [LeadController::class, 'update']);
Route::get  ('/lead/store',             [LeadController::class, 'store']);
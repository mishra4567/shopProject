<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
// {{-- 16.0.2024 || 21.58 --}}
use App\Http\Controllers\CouponController;
// {{-- 16.0.2024 || 21.58 --}}
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::group(['middleware' => 'admin_auth'], function () {
    /**
     * This is for Dashboard
     */
    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
    /**
     * This is for Category
     */
    Route::get('admin/category', [CategoryController::class, 'index']);
    Route::get('admin/category/manage_category', [CategoryController::class, 'manage_category']);
    Route::post('admin/category/manage_category_process', [CategoryController::class, 'manage_category_process'])->name('category.manage_category_process');
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'delete']);
    Route::get('admin/category/manage_category/{id}', [CategoryController::class, 'manage_category']);
    // 17.8.2024  || 20.28
    Route::get('admin/category/status/{status}/{id}', [CategoryController::class, 'status']);
    // 17.8.2024  || 20.28

    // {{-- 16.0.2024 || 21.58 --}}
    /**
     * This is for Coupon
     */
    Route::get('admin/coupon', [CouponController::class, 'index']);
    Route::get('admin/coupon/manage_coupon', [CouponController::class, 'manage_coupon']);
    Route::post('admin/coupon/manage_coupon_process', [CouponController::class, 'manage_coupon_process'])->name('coupon.manage_coupon_process');
    Route::get('admin/coupon/delete/{id}', [CouponController::class, 'delete']);
    Route::get('admin/coupon/manage_coupon/{id}', [CouponController::class, 'manage_coupon']);
    // 17.8.2024  || 20.28
    Route::get('admin/coupon/status/{status}/{id}', [CouponController::class, 'status']);
    // 17.8.2024  || 20.28
    // {{-- 16.0.2024 || 21.58 --}}

    /**
     * This is for Admin Login And Logout
     */
    // Route::get('admin/updatePassword',[AdminController::class,'updatePassword']);
    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        return redirect('admin')->with('error', 'Logout sucessfully');
        // return redirect('admin');
    });
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WishlistController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [ProductsController::class,'index'])->name('dashboard');
Route::get('addProduct',function () {
    return view('addProduct');
});
Route::post('addProducts/store', [ProductsController::class, 'store'])->name('addProductsStore');
Route::get('currentTeamWishlist',[WishlistController::class,'index'])->name('currentTeamWishlist');
Route::get('/addToWishlist/{product_id}/{team_id}',[WishlistController::class,'store']);
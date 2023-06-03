<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/add_product',[productController::class , 'add_product']);
Route::get('/show_products',[productController::class , 'show_products']);
Route::post('/edit_product/{id}',[productController::class , 'edit_product']);
Route::get('/delete_product/{id}',[productController::class , 'delete_product']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backsite\BrandsController;
use App\Http\Controllers\Backsite\TypeController;

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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    })->name('dashboard');
    // brand
    Route::resource('/brands', BrandsController::class);
    // type
    Route::resource('/type', TypeController::class);
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
   

   
// });

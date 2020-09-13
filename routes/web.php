<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ItemsManagementController;

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

Route::view('/', 'welcome');

Route::group(['prefix' => 'api'], function () {

    Route::group(['prefix' => 'items-management'], function () {
        Route::get('/', [ItemsManagementController::class, 'index'])->name('items-management.index');
        Route::post('/store/{id?}', [ItemsManagementController::class, 'store'])->name('items-management.store');
    });

    // more routes ...

});

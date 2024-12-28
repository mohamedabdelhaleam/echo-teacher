<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProductController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('dashboard.index');
});


Route::get('/admin', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.index');

Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {

    ##################################### Start Products Routes #####################################

    Route::resource('products', ProductController::class);

    ##################################### End Products Routes #####################################
});
require __DIR__ . '/auth.php';

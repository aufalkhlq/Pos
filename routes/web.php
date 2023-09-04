<?php

use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TambahBarangController;

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

    Route::prefix("dashboard")->name("dashboard.")->group(function () {
        Route::middleware("guest_dashboard")->group(function () {
            // Auth Route
            Route::get("login", [AuthController::class, "login_index"])->name("login.index");
            Route::post("login", [AuthController::class, "login"])->name("login");
            Route::get("register", [AuthController::class, "register_index"])->name("register.index");
            Route::post("register", [AuthController::class, "register"])->name("register");
        });

        Route::middleware("auth_dashboard")->group(function () {
            // Auth Route
            Route::post("logout", [AuthController::class, "logout"])->name("logout");
            // Main Dashboard Route
            Route::get("/", [DashboardController::class, "index"])->name("index");
            // DataTable Route
            Route::get("barang", [BarangController::class, "index"])->name("barang.index");
            // Post Route
            Route::get("pos", [PostController::class, "index"])->name("post.index");
            Route::get("edit", [PostController::class, "barang"])->name("edit-barang.index");
            Route::get("profile",[ProfileController::class, "index"])->name("profile.index");
            // Supplier Route
            Route::get("supplier", [SupplierController::class, "index"])->name("supplier.index");
            Route::get("tambahbarang", [BarangController::class, "create"])->name("tambahbarang.create");
            Route::post("tambahbarang", [BarangController::class, "store"])->name("tambahbarang.store");
            Route::delete("/barang/{id}/delete", [BarangController::class, "delete"])->name("barang.delete");
            // Route::delete('/barang/{id}', 'BarangController@delete')->name('barang.delete');
            Route::get("/barang/{id}/edit", [BarangController::class, "edit"])->name("barang.edit");
            Route::put("/barang/{id}", [BarangController::class, "update"])->name("barang.update");
            Route::resource('barang',\App\Http\Controllers\BarangController::class);
        });
    });
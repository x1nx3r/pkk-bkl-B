<?php

use App\Http\Controllers\AdminGatewayController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get("/", [HomeController::class, "index"])->name("home");

// Static Pages
Route::view("/profil", "profil")->name("profil");
Route::view("/visi-misi", "visi-misi")->name("visi-misi");
Route::view("/pokja-sekretariat", "pokja-sekretariat")->name(
    "pokja-sekretariat"
);
Route::view("/informasi", "informasi")->name("informasi");
Route::view("/dokumentasi", "dokumentasi")->name("dokumentasi");

// Admin Gateway
Route::get("/admin-gateway", [AdminGatewayController::class, "show"])->name(
    "admin.gateway"
);
Route::post("/admin-gateway", [AdminGatewayController::class, "verify"])->name(
    "admin.gateway.verify"
);

/*
|--------------------------------------------------------------------------
| Content Display Routes
|--------------------------------------------------------------------------
*/

// Berita (News) - Public Display Only
Route::get("/berita", [BeritaController::class, "index"])->name("berita.index");
Route::get("/berita/{berita:slug}", [BeritaController::class, "show"])->name(
    "berita.show"
);

// Kegiatan (Activities) - Public Display Only
Route::get("/kegiatan", [KegiatanController::class, "index"])->name(
    "kegiatan.index"
);
Route::get("/kegiatan/{kegiatan:slug}", [
    KegiatanController::class,
    "show",
])->name("kegiatan.show");

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

// Auth routes (login, register, password reset, etc.)
require __DIR__ . "/auth.php";

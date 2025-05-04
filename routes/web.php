<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;

#Route::get("/", function () {
#    return view("welcome");
#});

Route::get("/berita", [BeritaController::class, "index"])->name("berita.index");
Route::get("/berita/{berita:slug}", [BeritaController::class, "show"])->name(
    "berita.show"
);

Route::get("/", function () {
    return view("homepage");
})->name("home");

Route::get("/profil", function () {
    return view("profil");
})->name("profil");

Route::get("/visi-misi", function () {
    return view("visi-misi");
})->name("visi-misi");

Route::get("/pokja-sekretariat", function () {
    return view("pokja-sekretariat");
})->name("pokja-sekretariat");

Route::get("/informasi", function () {
    return view("informasi");
})->name("informasi");

Route::get("/dokumentasi", function () {
    return view("dokumentasi");
})->name("dokumentasi");

Route::get("/visi-misi", function () {
    return view("visi-misi");
})->name("visi-misi");

Route::get("/dashboard", function () {
    return view("dashboard");
})
    ->middleware(["auth", "verified"])
    ->name("dashboard");

// Kegiatan routes
Route::get("/kegiatan", [KegiatanController::class, "index"])->name(
    "kegiatan.index"
);

Route::get("/kegiatan/{kegiatan:slug}", [
    KegiatanController::class,
    "show",
])->name("kegiatan.show");

Route::middleware("auth")->group(function () {
    Route::get("/profile", [ProfileController::class, "edit"])->name(
        "profile.edit"
    );
    Route::patch("/profile", [ProfileController::class, "update"])->name(
        "profile.update"
    );
    Route::delete("/profile", [ProfileController::class, "destroy"])->name(
        "profile.destroy"
    );

    Route::get("/berita/create", [BeritaController::class, "create"])->name(
        "berita.create"
    );
    Route::post("/berita", [BeritaController::class, "store"])->name(
        "berita.store"
    );
    Route::get("/berita/{berita:slug}/edit", [
        BeritaController::class,
        "edit",
    ])->name("berita.edit");
    Route::put("/berita/{berita:slug}", [
        BeritaController::class,
        "update",
    ])->name("berita.update");
    Route::delete("/berita/{berita:slug}", [
        BeritaController::class,
        "destroy",
    ])->name("berita.destroy");
});

require __DIR__ . "/auth.php";

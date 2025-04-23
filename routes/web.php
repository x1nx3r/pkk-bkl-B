<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

#Route::get("/", function () {
#    return view("welcome");
#});

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
});

require __DIR__ . "/auth.php";

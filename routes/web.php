<?php

use App\Http\Controllers\AdminGatewayController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\PageSection;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get("/", [HomeController::class, "index"])->name("home");

// Static Pages
Route::get("/profil", function () {
    return view("pages.profil");
})->name("profil");

// Profil section routes
Route::get('/profil/{section}', function ($section) {
    $validSections = ['tentang-kami', 'struktur-organisasi', 'landasan-hukum'];
    
    if (!in_array($section, $validSections)) {
        abort(404);
    }
    
    return view('pages.profil', compact('section'));
})->name('profil.section');

Route::get("/visi-misi", function () {
    // Get all active sections for the "visi-misi" page
    $pageSections = \App\Models\PageSection::where("page_slug", "visi-misi")
        ->where("active", true)
        ->orderBy("order")
        ->get();

    return view("pages.visi-misi", compact("pageSections"));
})->name("visi-misi");

// Per-section pages for visi-misi (e.g. /visi-misi/visi)
Route::get('/visi-misi/{section_key}', function ($section_key) {
    $pageSection = PageSection::where('page_slug', 'visi-misi')
        ->where('section_key', $section_key)
        ->where('active', true)
        ->firstOrFail();

    return view('visi-misi.section', ['pageSection' => $pageSection]);
})->name('visi-misi.section');
Route::get("/pokja-sekretariat", function () {
    $pageSections = \App\Models\PageSection::where(
        "page_slug",
        "pokja-sekretariat"
    )
        ->where("active", true)
        ->orderBy("order")
        ->get();

    return view("pages.pokja-sekretariat", compact("pageSections"));
})->name("pokja-sekretariat");

// Per-section pages for pokja-sekretariat
Route::get('/pokja-sekretariat/{section_key}', function ($section_key) {
    $pageSection = PageSection::where('page_slug', 'pokja-sekretariat')
        ->where('section_key', $section_key)
        ->where('active', true)
        ->firstOrFail();

    return view('pokja-sekretariat.section', ['pageSection' => $pageSection]);
})->name('pokja-sekretariat.section');

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

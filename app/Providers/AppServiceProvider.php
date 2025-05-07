<?php

namespace App\Providers;

use App\Models\Berita;
use App\Rules\BeritaRules;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register Berita rules
        Gate::define("create-berita", [BeritaRules::class, "create"]);
        Gate::define("update-berita", [BeritaRules::class, "update"]);
        Gate::define("delete-berita", [BeritaRules::class, "delete"]);
        Gate::define("view-kegiatan", [KegiatanRules::class, "view"]);
        Gate::define("viewAny-kegiatan", [KegiatanRules::class, "viewAny"]);
        Gate::define("create-kegiatan", [KegiatanRules::class, "create"]);
        Gate::define("update-kegiatan", [KegiatanRules::class, "update"]);
        Gate::define("delete-kegiatan", [KegiatanRules::class, "delete"]);
    }
}

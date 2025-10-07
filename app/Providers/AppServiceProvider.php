<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\PageSection;

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
        // All admin functionality moved to Filament panel
        // No need for custom Gates since Filament handles permissions

        // Share sections with the header for dropdown navigation
        View::composer('components.header', function ($view) {
            // Visi-Misi sections
            $visiSections = PageSection::where('page_slug', 'visi-misi')
                ->where('active', true)
                ->orderBy('order')
                ->get();

            // Profil sections (we'll create a structure for this)
            $profilSections = collect([
                (object) ['section_key' => 'tentang-kami', 'title' => 'Tentang Kami'],
                (object) ['section_key' => 'struktur-organisasi', 'title' => 'Struktur Organisasi'],
                (object) ['section_key' => 'landasan-hukum', 'title' => 'Landasan Hukum'],
            ]);

            // Program Kerja sections
            $pokjaSections = PageSection::where('page_slug', 'pokja-sekretariat')
                ->where('active', true)
                ->orderBy('order')
                ->get();

            $view->with(compact('visiSections', 'profilSections', 'pokjaSections'));
        });
    }
}

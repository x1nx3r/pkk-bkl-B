<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;

class HomeController extends Controller
{
    public function index()
    {
        // Get recent berita for slideshow (top 3 most recent) with user relationship
        $featuredBerita = Berita::with('user')->published()->latest()->take(3)->get();
        
        // Get latest news for the news section (next 3 after slideshow, or latest 3 if not enough)
        $totalBerita = Berita::published()->count();
        
        if ($totalBerita > 3) {
            // Show the next 3 berita after slideshow
            $latestNews = Berita::published()->latest()->skip(3)->take(3)->get();
        } else {
            // If we have 3 or fewer, show all available berita
            $latestNews = Berita::published()->latest()->take(3)->get();
        }
        
        $upcomingActivities = Kegiatan::where("status", "upcoming")
            ->orderBy("tanggal_mulai")
            ->take(3)
            ->get();

        return view("homepage", compact("featuredBerita", "latestNews", "upcomingActivities"));
    }
}

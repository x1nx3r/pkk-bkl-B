<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;

class HomeController extends Controller
{
    public function index()
    {
        $latestNews = Berita::published()->latest()->take(3)->get();
        $upcomingActivities = Kegiatan::where("status", "upcoming")
            ->orderBy("tanggal_mulai")
            ->take(3)
            ->get();

        return view("homepage", compact("latestNews", "upcomingActivities"));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the news.
     */
    public function index(Request $request)
    {
        $beritas = Berita::with(["user"])
            ->filter($request->only(["search"]))
            ->published() // Always show only published for public
            ->latest()
            ->paginate(9);

        return view("berita.index", compact("beritas"));
    }

    /**
     * Display the specified news item.
     */
    public function show(Berita $berita)
    {
        // Only allow viewing published items on public site
        if ($berita->status !== "published") {
            abort(404);
        }

        $berita->load(["user"]);

        $relatedNews = Berita::published()
            ->where("id", "!=", $berita->id)
            ->latest()
            ->take(3)
            ->get();

        return view("berita.show", compact("berita", "relatedNews"));
    }

    /**
     * Get latest news for homepage.
     */
    public function getLatestNews($limit = 3)
    {
        return Berita::with(["user"])
            ->published()
            ->latest()
            ->take($limit)
            ->get();
    }
}

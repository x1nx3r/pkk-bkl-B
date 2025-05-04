<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function __construct() {}

    public function index(Request $request)
    {
        $beritas = Berita::with(["user"])
            ->filter($request->only(["search"]))
            ->when(
                !auth()->check() || !auth()->user()->hasRole("admin"),
                function ($query) {
                    return $query->published();
                }
            )
            ->latest()
            ->paginate(9);

        return view("berita.index", compact("beritas"));
    }

    public function show(Berita $berita)
    {
        if (
            $berita->status !== "published" &&
            (!auth()->check() || !Gate::allows("update-berita", $berita))
        ) {
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

    public function create()
    {
        Gate::authorize("create-berita");
        return view("berita.create");
    }

    public function store(Request $request)
    {
        Gate::authorize("create-berita");

        $validated = $request->validate([
            "judul" => "required|string|max:255",
            "konten" => "required|string",
            "featured_image" =>
                "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
            "status" => "required|in:draft,published",
        ]);

        if ($request->hasFile("featured_image")) {
            $path = $request->file("featured_image")->store("public/berita");
            $validated["featured_image"] = str_replace("public/", "", $path);
        }

        $berita = Berita::create([
            "judul" => $validated["judul"],
            "konten" => $validated["konten"],
            "featured_image" => $validated["featured_image"] ?? null,
            "status" => $validated["status"],
            "user_id" => auth()->id(),
        ]);

        return redirect()
            ->route("berita.show", $berita)
            ->with("success", "Berita berhasil ditambahkan.");
    }

    public function edit(Berita $berita)
    {
        Gate::authorize("update-berita", $berita);
        return view("berita.edit", compact("berita"));
    }

    public function update(Request $request, Berita $berita)
    {
        Gate::authorize("update-berita", $berita);

        $validated = $request->validate([
            "judul" => "required|string|max:255",
            "konten" => "required|string",
            "featured_image" =>
                "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
            "status" => "required|in:draft,published",
        ]);

        if ($request->hasFile("featured_image")) {
            // Delete old image if exists
            if ($berita->featured_image) {
                Storage::delete("public/" . $berita->featured_image);
            }

            $path = $request->file("featured_image")->store("public/berita");
            $validated["featured_image"] = str_replace("public/", "", $path);
        }

        $berita->update([
            "judul" => $validated["judul"],
            "konten" => $validated["konten"],
            "featured_image" =>
                $validated["featured_image"] ?? $berita->featured_image,
            "status" => $validated["status"],
        ]);

        return redirect()
            ->route("berita.show", $berita)
            ->with("success", "Berita berhasil diperbarui.");
    }

    public function destroy(Berita $berita)
    {
        Gate::authorize("delete-berita", $berita);

        // Delete image if exists
        if ($berita->featured_image) {
            Storage::delete("public/" . $berita->featured_image);
        }

        $berita->delete();

        return redirect()
            ->route("berita.index")
            ->with("success", "Berita berhasil dihapus.");
    }
}

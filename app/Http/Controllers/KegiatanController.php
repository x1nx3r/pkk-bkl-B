<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $kegiatans = Kegiatan::with(["user"])
            ->filter($request->only(["search", "status"]))
            ->latest("tanggal_mulai")
            ->paginate(9);

        return view("kegiatan.index", compact("kegiatans"));
    }

    public function show(Kegiatan $kegiatan)
    {
        $kegiatan->load(["user"]);

        $relatedActivities = Kegiatan::where("id", "!=", $kegiatan->id)
            ->where(function ($query) use ($kegiatan) {
                $query
                    ->where("status", $kegiatan->status)
                    ->orWhere("lokasi", $kegiatan->lokasi);
            })
            ->latest("tanggal_mulai")
            ->take(3)
            ->get();

        return view("kegiatan.show", compact("kegiatan", "relatedActivities"));
    }
}

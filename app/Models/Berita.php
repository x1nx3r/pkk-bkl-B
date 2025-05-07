<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        "judul",
        "slug",
        "konten",
        "featured_image",
        "status",
        "user_id",
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($berita) {
            $berita->slug = Str::slug($berita->judul);

            // Ensure unique slug
            $count = static::where("slug", $berita->slug)->count();
            if ($count > 0) {
                $berita->slug = $berita->slug . "-" . ($count + 1);
            }

            if (!$berita->user_id && auth()->check()) {
                $berita->user_id = auth()->id();
            }
        });
    }

    // User relationship (keep this one)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where("status", "published");
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters["search"] ?? false, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query
                    ->where("judul", "like", "%" . $search . "%")
                    ->orWhere("konten", "like", "%" . $search . "%");
            });
        });
    }
}

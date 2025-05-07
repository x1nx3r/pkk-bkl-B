<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PageSection extends Model
{
    use HasFactory;

    protected $fillable = [
        "page_slug",
        "section_key",
        "title",
        "content",
        "content_data",
        "order",
        "active",
    ];

    protected $casts = [
        "content_data" => "array",
        "active" => "boolean",
    ];
}

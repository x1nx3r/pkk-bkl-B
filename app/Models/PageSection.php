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

    /**
     * Set the content_data attribute, ensuring it's always an array
     */
    public function setContentDataAttribute($value)
    {
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            $this->attributes['content_data'] = json_encode(is_array($decoded) ? $decoded : []);
        } elseif (is_array($value)) {
            $this->attributes['content_data'] = json_encode($value);
        } else {
            $this->attributes['content_data'] = json_encode([]);
        }
    }

    /**
     * Get the content_data attribute, ensuring it's always an array
     */
    public function getContentDataAttribute($value)
    {
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            return is_array($decoded) ? $decoded : [];
        }
        return is_array($value) ? $value : [];
    }
}

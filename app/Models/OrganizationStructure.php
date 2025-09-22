<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrganizationStructure extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'position',
        'photo',
        'section',
        'subsection',
        'order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Scope for active records
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('section')->orderBy('subsection')->orderBy('order');
    }

    // Get section display name
    public function getSectionDisplayNameAttribute()
    {
        $sections = [
            'struktur_utama' => 'Struktur Utama',
            'bidang_1' => 'Bidang I – Pembinaan Karakter Keluarga',
            'bidang_2' => 'Bidang II – Pendidikan dan Peningkatan Ekonomi Keluarga',
            'bidang_3' => 'Bidang III – Ketua Bidang Penguatan Ketahanan Pangan',
            'bidang_4' => 'Bidang IV – Kesehatan Keluarga dan Lingkungan',
            'pokja_1' => 'POKJA I',
            'pokja_2' => 'POKJA II',
            'pokja_3' => 'POKJA III',
            'pokja_4' => 'POKJA IV',
        ];

        return $sections[$this->section] ?? $this->section;
    }
}

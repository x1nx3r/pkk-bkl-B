<?php

require __DIR__ . '/../vendor/autoload.php';

// Boot the framework
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Kegiatan;

$k = Kegiatan::create([
    'judul' => 'Test Kegiatan',
    'lokasi' => 'Jakarta',
    'tanggal_mulai' => '2025-09-23 14:30:00',
    'tanggal_selesai' => '2025-09-23 16:00:00',
    'deskripsi' => 'Deskripsi test',
    'status' => 'upcoming',
    'user_id' => 1,
]);

echo "Created Kegiatan ID: " . $k->id . "\n";
echo "tanggal_mulai cast: " . get_class($k->tanggal_mulai) . " -> " . $k->tanggal_mulai->toDateTimeString() . "\n";

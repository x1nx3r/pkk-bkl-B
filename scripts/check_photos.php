<?php

// Boot Laravel application and inspect OrganizationStructure photo paths
require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\OrganizationStructure;
use Illuminate\Support\Facades\Storage;

echo "Checking OrganizationStructure photo paths...\n\n";

$rows = OrganizationStructure::orderBy('id')->take(20)->get();

if ($rows->isEmpty()) {
    echo "No OrganizationStructure records found.\n";
    exit(0);
}

$storageLinkExists = file_exists(public_path('storage')) && is_link(public_path('storage')) ? 'yes' : (file_exists(public_path('storage')) ? 'exists-not-symlink' : 'no');

echo "public/storage link: {$storageLinkExists}\n\n";

foreach ($rows as $m) {
    $p = $m->photo;
    $path = $p ? ltrim($p, '/') : null;

    $publicExists = $path ? (file_exists(public_path($path)) ? 'yes' : 'no') : 'n/a';
    $publicStorageExists = $path ? (file_exists(public_path('storage/' . $path)) ? 'yes' : 'no') : 'n/a';
    $storageDiskExists = $path ? (Storage::disk('public')->exists($path) ? 'yes' : 'no') : 'n/a';
    $isUrl = $p ? (filter_var($p, FILTER_VALIDATE_URL) ? 'yes' : 'no') : 'n/a';

    echo "id:{$m->id} section:{$m->section} subsection:{$m->subsection}\n";
    echo " name: {$m->name}\n";
    echo " photo raw: ".($p ?? 'NULL')."\n";
    echo "  public_path({$path}): {$publicExists}\n";
    echo "  public/storage/{$path}: {$publicStorageExists}\n";
    echo "  storage disk public: {$storageDiskExists}\n";
    echo "  is_url: {$isUrl}\n";
    echo "---\n";
}

echo "Done.\n";

<?php
require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\OrganizationStructure;

echo "Normalizing OrganizationStructure.photo paths...\n";

$rows = OrganizationStructure::all();
$changed = 0;
foreach ($rows as $r) {
    $orig = $r->photo;
    if (! $orig) continue;

    $p = ltrim($orig, '/');

    // common patterns to normalize
    if (str_starts_with($p, 'images/struktur/')) {
        $p = substr($p, strlen('images/'));
    } elseif (str_starts_with($p, 'images/profiles/')) {
        $p = substr($p, strlen('images/'));
    } elseif (str_starts_with($p, 'public/images/')) {
        $p = substr($p, strlen('public/images/'));
    }

    // If changed, persist
    if ($p !== $orig) {
        $r->photo = $p;
        $r->save();
        $changed++;
        echo "Updated id={$r->id}: '{$orig}' -> '{$p}'\n";
    }
}

echo "Done. {$changed} rows updated.\n";

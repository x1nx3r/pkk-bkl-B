<?php
// boots the framework and prints how each OrganizationStructure.photo would be resolved
require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\OrganizationStructure;
use Illuminate\Support\Facades\Storage;

echo "Resolved photo URLs report:\n\n";

$rows = OrganizationStructure::active()->ordered()->take(200)->get();
foreach ($rows as $r) {
    $photo = $r->photo;
    $photoUrl = null;
    $is_url = false;

    if ($photo) {
        if (filter_var($photo, FILTER_VALIDATE_URL)) {
            $photoUrl = $photo;
            $is_url = true;
        } else {
            $path = ltrim($photo, '/');
            if (file_exists(public_path($path))) {
                $photoUrl = asset($path);
            } elseif (file_exists(public_path('storage/' . $path))) {
                $photoUrl = asset('storage/' . $path);
            } elseif (Storage::disk('public')->exists($path)) {
                $photoUrl = Storage::url($path);
            }
        }
    }

    $defaultExists = file_exists(public_path('images/profiles/default.jpg')) ? 'yes' : 'no';
    $publicExists = $photo ? (file_exists(public_path(ltrim($photo, '/'))) ? 'yes' : 'no') : 'n/a';
    $publicStorageExists = $photo ? (file_exists(public_path('storage/' . ltrim($photo, '/'))) ? 'yes' : 'no') : 'n/a';
    $storageDiskExists = $photo ? (Storage::disk('public')->exists(ltrim($photo, '/')) ? 'yes' : 'no') : 'n/a';

    printf("id:%d name:%s\n photo_raw:%s\n resolved:%s\n public_exists:%s public_storage_exists:%s storage_disk_exists:%s is_url:%s default_exists:%s\n---\n",
        $r->id,
        $r->name,
        $photo ?? '<null>',
        $photoUrl ?? '<none>',
        $publicExists,
        $publicStorageExists,
        $storageDiskExists,
        $is_url ? 'yes' : 'no',
        $defaultExists
    );
}

echo "Done.\n";

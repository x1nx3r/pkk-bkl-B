<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\OrganizationStructure;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrganizationStructureUploadTest extends TestCase
{
    use RefreshDatabase;

    public function test_photo_uploads_to_public_disk_and_saves_path()
    {
        Storage::fake('public');

        // simulate an uploaded image
        $file = UploadedFile::fake()->image('avatar.jpg', 200, 200)->size(500);

        // emulate create via model (in reality Filament handles storage)
        $path = $file->store('struktur', 'public');

        // assert the file ended up in storage/app/public/struktur
        Storage::disk('public')->assertExists($path);

        // create a DB row that stores the path (this is what Filament will save)
        $model = OrganizationStructure::create([
            'name' => 'Test User',
            'position' => 'Tester',
            'photo' => $path,
            'section' => 'bidang_1',
            'subsection' => null,
            'order' => 1,
            'is_active' => true,
        ]);

        $this->assertDatabaseHas('organization_structures', [
            'id' => $model->id,
            'photo' => $path,
        ]);
    }
}

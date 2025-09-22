<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\OrganizationStructure;

class OrganizationStructureCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_update_delete_workflow()
    {
        Storage::fake('public');

        // simulate file upload via Filament
        $file = UploadedFile::fake()->image('avatar.jpg', 200, 200)->size(300);
        $path = $file->store('struktur', 'public');

        // create
        $m = OrganizationStructure::create([
            'name' => 'Create Test',
            'position' => 'Tester',
            'photo' => $path,
            'section' => 'bidang_1',
            'subsection' => null,
            'order' => 1,
            'is_active' => true,
        ]);

        $this->assertDatabaseHas('organization_structures', ['id' => $m->id]);
        Storage::disk('public')->assertExists($path);

        // update
        $m->update(['position' => 'Updated Tester']);
        $this->assertDatabaseHas('organization_structures', ['id' => $m->id, 'position' => 'Updated Tester']);

        // delete
        $m->delete();
        $this->assertDatabaseMissing('organization_structures', ['id' => $m->id]);
    }
}

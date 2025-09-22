<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfilePhotoComponentTest extends TestCase
{
    use RefreshDatabase;

    public function test_component_renders_storage_url()
    {
        Storage::fake('public');
        Storage::disk('public')->put('profiles/default.jpg', 'contents');

        $member = (object) ['name' => 'Tester', 'photo' => 'profiles/default.jpg'];

        $html = $this->blade('<x-profile-photo :member="$member" />', ['member' => $member]);

        $this->assertStringContainsString('img', $html);
        $this->assertStringContainsString('/storage/profiles/default.jpg', $html);
    }
}

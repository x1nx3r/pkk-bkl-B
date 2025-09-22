<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\OrganizationStructure;

class OrganizationStructureModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_active_scope_and_ordered_scope()
    {
    OrganizationStructure::factory()->create(['name' => 'A', 'order' => 2, 'is_active' => true, 'section' => 'bidang_1', 'subsection' => 'sub1']);
    OrganizationStructure::factory()->create(['name' => 'B', 'order' => 1, 'is_active' => true, 'section' => 'bidang_1', 'subsection' => 'sub1']);
    OrganizationStructure::factory()->create(['name' => 'C', 'order' => 3, 'is_active' => false, 'section' => 'bidang_1', 'subsection' => 'sub1']);

        $active = OrganizationStructure::active()->ordered()->get();

        $this->assertCount(2, $active);
        $this->assertEquals('B', $active->first()->name);
    }
}

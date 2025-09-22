<?php

namespace Database\Factories;

use App\Models\OrganizationStructure;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationStructureFactory extends Factory
{
    protected $model = OrganizationStructure::class;

    public function definition()
    {
        $sections = ['struktur_utama', 'bidang_1', 'bidang_2', 'bidang_3', 'bidang_4', 'pokja_1', 'pokja_2'];
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->jobTitle(),
            'photo' => 'profiles/default.jpg',
            'section' => $this->faker->randomElement($sections),
            'subsection' => $this->faker->word(),
            'order' => $this->faker->numberBetween(1, 10),
            'is_active' => $this->faker->boolean(90),
        ];
    }
}

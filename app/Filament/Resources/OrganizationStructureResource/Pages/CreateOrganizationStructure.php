<?php

namespace App\Filament\Resources\OrganizationStructureResource\Pages;

use App\Filament\Resources\OrganizationStructureResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrganizationStructure extends CreateRecord
{
    protected static string $resource = OrganizationStructureResource::class;

    protected ?string $heading = 'Tambah Anggota Struktur Organisasi';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

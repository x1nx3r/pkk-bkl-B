<?php

namespace App\Filament\Resources\OrganizationStructureResource\Pages;

use App\Filament\Resources\OrganizationStructureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrganizationStructure extends EditRecord
{
    protected static string $resource = OrganizationStructureResource::class;

    protected ?string $heading = 'Edit Anggota Struktur Organisasi';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

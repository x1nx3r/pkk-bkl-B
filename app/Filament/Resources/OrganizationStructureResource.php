<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganizationStructureResource\Pages;
use App\Filament\Resources\OrganizationStructureResource\RelationManagers;
use App\Models\OrganizationStructure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrganizationStructureResource extends Resource
{
    protected static ?string $model = OrganizationStructure::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'Struktur Organisasi';

    protected static ?string $modelLabel = 'Struktur Organisasi';

    protected static ?string $pluralModelLabel = 'Struktur Organisasi';

    protected static ?string $navigationGroup = 'Manajemen Profil';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Dasar')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('position')
                            ->label('Jabatan')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Select::make('section')
                            ->label('Bagian')
                            ->required()
                            ->options([
                                'struktur_utama' => 'Struktur Utama',
                                'bidang_1' => 'Bidang I – Pembinaan Karakter Keluarga',
                                'bidang_2' => 'Bidang II – Ekonomi & Kewirausahaan',
                                'bidang_3' => 'Bidang III – Pendidikan & Keterampilan',
                                'bidang_4' => 'Bidang IV – Kesehatan & Lingkungan',
                            ])
                            ->reactive(),

                        Forms\Components\Select::make('subsection')
                            ->label('Sub Bagian')
                            ->options([
                                'pokja_1' => 'POKJA I',
                                'pokja_2' => 'POKJA II',
                                'pokja_3' => 'POKJA III',
                                'pokja_4' => 'POKJA IV',
                            ])
                            ->visible(fn (Forms\Get $get) => in_array($get('section'), ['bidang_1', 'bidang_2', 'bidang_3', 'bidang_4'])),

                        Forms\Components\TextInput::make('order')
                            ->label('Urutan')
                            ->numeric()
                            ->default(0)
                            ->helperText('Digunakan untuk mengurutkan tampilan dalam satu bagian'),
                    ])->columns(2),

                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('photo')
                            ->label('Foto Profil')
                            ->image()
                            // store uploaded files on the 'public' disk (storage/app/public)
                            ->disk('public')
                            // store files under the 'struktur' directory on the public disk
                            ->directory('struktur')
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '1:1',
                            ])
                            ->maxSize(2048)
                            ->helperText('Upload foto profil (maks. 2MB, rasio 1:1)'),
                    ]),

                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true)
                            ->helperText('Centang untuk menampilkan dalam struktur organisasi'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Foto')
                    ->circular()
                    ->size(50),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('position')
                    ->label('Jabatan')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('section')
                    ->label('Bagian')
                    ->formatStateUsing(fn (string $state): string => match($state) {
                        'struktur_utama' => 'Struktur Utama',
                        'bidang_1' => 'Bidang I',
                        'bidang_2' => 'Bidang II',
                        'bidang_3' => 'Bidang III',
                        'bidang_4' => 'Bidang IV',
                        default => $state,
                    })
                    ->badge()
                    ->color(fn (string $state): string => match($state) {
                        'struktur_utama' => 'primary',
                        'bidang_1' => 'success',
                        'bidang_2' => 'warning',
                        'bidang_3' => 'info',
                        'bidang_4' => 'danger',
                        default => 'gray',
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('subsection')
                    ->label('Sub Bagian')
                    ->formatStateUsing(fn (?string $state): string => $state ? match($state) {
                        'pokja_1' => 'POKJA I',
                        'pokja_2' => 'POKJA II',
                        'pokja_3' => 'POKJA III',
                        'pokja_4' => 'POKJA IV',
                        default => $state,
                    } : '-')
                    ->sortable(),

                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('section')
                    ->label('Bagian')
                    ->options([
                        'struktur_utama' => 'Struktur Utama',
                        'bidang_1' => 'Bidang I',
                        'bidang_2' => 'Bidang II', 
                        'bidang_3' => 'Bidang III',
                        'bidang_4' => 'Bidang IV',
                    ]),

                Tables\Filters\SelectFilter::make('subsection')
                    ->label('Sub Bagian')
                    ->options([
                        'pokja_1' => 'POKJA I',
                        'pokja_2' => 'POKJA II',
                        'pokja_3' => 'POKJA III',
                        'pokja_4' => 'POKJA IV',
                    ]),

                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif')
                    ->trueLabel('Aktif')
                    ->falseLabel('Tidak Aktif')
                    ->native(false),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Edit'),
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Hapus Terpilih'),
                ]),
            ])
            ->defaultSort('section')
            ->defaultSort('order');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrganizationStructures::route('/'),
            'create' => Pages\CreateOrganizationStructure::route('/create'),
            'edit' => Pages\EditOrganizationStructure::route('/{record}/edit'),
        ];
    }
}

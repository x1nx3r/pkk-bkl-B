<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageSectionResource\Pages;
use App\Models\PageSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PageSectionResource extends Resource
{
    protected static ?string $model = PageSection::class;
    protected static ?string $navigationIcon = "heroicon-o-document-text";
    protected static ?string $navigationGroup = "Manajemen Konten";
    protected static ?string $navigationLabel = "Konten Halaman";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make("Informasi Dasar")->schema([
                Forms\Components\Select::make("page_slug")
                    ->options([
                        "visi-misi" => "Visi & Misi",
                        "profil" => "Profil",
                        "pokja-sekretariat" => "Pokja & Sekretariat",
                    ])
                    ->required()
                    ->searchable(),

                Forms\Components\TextInput::make("section_key")
                    ->required()
                    ->maxLength(255)
                    ->helperText(
                        'Identifier unik untuk bagian ini (mis. "visi", "misi", "tujuan")'
                    ),

                Forms\Components\TextInput::make("title")
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make("order")
                    ->label('Urutan')
                    ->numeric()
                    ->default(0),

                Forms\Components\Toggle::make("active")->label('Aktif')->default(true),
            ]),

            Forms\Components\Section::make("Content")
                ->schema([
            Forms\Components\RichEditor::make("content")
                ->label('Konten')
                ->required()
                ->columnSpanFull()
                        ->toolbarButtons([
                            "bold",
                            "italic",
                            "underline",
                            "strike",
                            "orderedList",
                            "h2",
                            "h3",
                            "h4",
                            "h5", // Added h5 which has styling in the template
                            "alignLeft",
                            "alignCenter",
                            "alignRight",
                            "link",
                            "undo",
                            "redo",
                            "blockquote",
                            "bulletList", // For better unordered list management (already has styling)
                            "indent", // Useful for creating hierarchies
                            "outdent", // Useful for managing indentation
                        ])
                        ->helperText(
                            "Gunakan daftar bernomor dan heading untuk menyusun konten. Styling dasar akan diterapkan otomatis."
                        ),
                ])
                ->collapsible(),

            Forms\Components\Section::make("Additional Data")
                ->schema([
                    Forms\Components\KeyValue::make("content_data")
                        ->helperText(
                            "Additional structured data for complex sections"
                        )
                        ->columnSpanFull()
                        ->default([])
                        ->dehydrateStateUsing(function ($state) {
                            // Ensure we always return an array for storage
                            return is_array($state) ? $state : [];
                        })
                        ->formatStateUsing(function ($state) {
                            // Handle cases where state might be a string or null
                            if (is_string($state)) {
                                $decoded = json_decode($state, true);
                                return is_array($decoded) ? $decoded : [];
                            }
                            return is_array($state) ? $state : [];
                        }),
                ])
                ->collapsed()
                ->collapsible(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("page_slug")
                    ->label("Page")
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make("title")
                    ->searchable()
                    ->sortable()
                    ->wrap(),
                Tables\Columns\TextColumn::make("section_key")
                    ->label("Key")
                    ->searchable(),
                Tables\Columns\TextColumn::make("order")->sortable(),
                Tables\Columns\IconColumn::make("active")->boolean(),
                Tables\Columns\TextColumn::make("updated_at")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make("page_slug")
                    ->label("Page")
                    ->options([
                        "visi-misi" => "Visi & Misi",
                        "profil" => "Profil",
                        "pokja-sekretariat" => "Pokja & Sekretariat",
                    ]),
                Tables\Filters\TernaryFilter::make("active"),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort("order");
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            "index" => Pages\ListPageSections::route("/"),
            "create" => Pages\CreatePageSection::route("/create"),
            "edit" => Pages\EditPageSection::route("/{record}/edit"),
        ];
    }
}

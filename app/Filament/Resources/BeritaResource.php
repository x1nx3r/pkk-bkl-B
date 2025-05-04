<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;
    protected static ?string $navigationIcon = "heroicon-o-newspaper";
    protected static ?string $navigationGroup = "Content Management";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make("Basic Information")->schema([
                Forms\Components\TextInput::make("judul")
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(
                        fn($state, callable $set) => $set(
                            "slug",
                            Str::slug($state)
                        )
                    ),

                Forms\Components\TextInput::make("slug")
                    ->required()
                    ->maxLength(255)
                    ->disabled()
                    ->dehydrated(),
            ]),

            Forms\Components\Section::make("Content")->schema([
                Forms\Components\FileUpload::make("featured_image")
                    ->image()
                    ->directory("berita")
                    ->visibility("public")
                    ->imageResizeMode("cover")
                    ->imageCropAspectRatio("16:9")
                    ->imageResizeTargetWidth("1200")
                    ->imageResizeTargetHeight("675"),

                Forms\Components\RichEditor::make("konten")
                    ->required()
                    ->columnSpanFull(),
            ]),

            Forms\Components\Section::make("Publishing")->schema([
                Forms\Components\Select::make("status")
                    ->options([
                        "draft" => "Draft",
                        "published" => "Published",
                    ])
                    ->required()
                    ->default("draft"),

                Forms\Components\Hidden::make("user_id")
                    ->default(auth()->id())
                    ->required(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make("featured_image"),
                Tables\Columns\TextColumn::make("judul")
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make("status")->badge()->color(
                    fn(string $state): string => match ($state) {
                        "published" => "success",
                        "draft" => "warning",
                    }
                ),
                Tables\Columns\TextColumn::make("user.name")->label("Author"),
                Tables\Columns\TextColumn::make("created_at")
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make("status")->options([
                    "draft" => "Draft",
                    "published" => "Published",
                ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort("created_at", "desc");
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
            "index" => Pages\ListBeritas::route("/"),
            "create" => Pages\CreateBerita::route("/create"),
            "edit" => Pages\EditBerita::route("/{record}/edit"),
        ];
    }
}

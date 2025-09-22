<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KegiatanResource\Pages;
use App\Models\Kegiatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class KegiatanResource extends Resource
{
    protected static ?string $model = Kegiatan::class;
    protected static ?string $navigationIcon = "heroicon-o-calendar";
    protected static ?string $navigationGroup = "Content Management";
    protected static ?string $recordTitleAttribute = "judul";
    protected static ?string $navigationLabel = 'Kegiatan';
    protected static ?string $pluralLabel = 'Kegiatan';
    protected static ?string $label = 'Kegiatan';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make("Basic Information")->schema([
                Forms\Components\TextInput::make("judul")
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
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

                Forms\Components\TextInput::make("lokasi")
                    ->required()
                    ->maxLength(255),
            ]),

            Forms\Components\Section::make("Schedule")->schema([
                Forms\Components\DateTimePicker::make("tanggal_mulai")
                    ->required()
                    ->label("Start Date & Time"),

                Forms\Components\DateTimePicker::make("tanggal_selesai")->label(
                    "End Date & Time (Optional)"
                ),

                Forms\Components\Select::make("status")
                    ->options([
                        "upcoming" => "Upcoming",
                        "ongoing" => "Ongoing",
                        "completed" => "Completed",
                    ])
                    ->required()
                    ->default("upcoming"),
            ]),

            Forms\Components\Section::make("Content")->schema([
                Forms\Components\FileUpload::make("featured_image")
                    ->image()
                    ->directory("kegiatan")
                    ->visibility("public")
                    ->imageResizeMode("cover")
                    ->imageCropAspectRatio("16:9")
                    ->imageResizeTargetWidth("1200")
                    ->imageResizeTargetHeight("675"),

                Forms\Components\RichEditor::make("deskripsi")
                    ->required()
                    ->columnSpanFull(),
            ]),

            Forms\Components\Hidden::make("user_id")
                ->default(auth()->id())
                ->required(),
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
                Tables\Columns\TextColumn::make("lokasi")->searchable(),
                Tables\Columns\TextColumn::make("tanggal_mulai")
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\BadgeColumn::make("status")->colors([
                    "warning" => "upcoming",
                    "success" => "ongoing",
                    "gray" => "completed",
                ]),
                Tables\Columns\TextColumn::make("user.name")->label(
                    "Created By"
                ),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make("status")->options([
                    "upcoming" => "Upcoming",
                    "ongoing" => "Ongoing",
                    "completed" => "Completed",
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
            ->defaultSort("tanggal_mulai", "desc");
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
            "index" => Pages\ListKegiatans::route("/"),
            "create" => Pages\CreateKegiatan::route("/create"),
            "edit" => Pages\EditKegiatan::route("/{record}/edit"),
        ];
    }
}

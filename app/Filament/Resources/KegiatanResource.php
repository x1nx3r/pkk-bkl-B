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
    protected static ?string $navigationGroup = "Manajemen Konten";
    protected static ?string $recordTitleAttribute = "judul";
    protected static ?string $navigationLabel = 'Kegiatan';
    protected static ?string $pluralLabel = 'Kegiatan';
    protected static ?string $label = 'Kegiatan';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make("Informasi Dasar")->schema([
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

            Forms\Components\Section::make("Jadwal")->schema([
                // hidden combined datetime value stored in DB
                Forms\Components\Hidden::make('tanggal_mulai')
                    ->required()
                    ->dehydrated()
                    ->afterStateHydrated(function ($state, callable $set) {
                        if ($state) {
                            try {
                                $dt = \Carbon\Carbon::parse($state);
                                $set('tanggal_mulai_date', $dt->toDateString());
                                $set('tanggal_mulai_time', $dt->format('H:i'));
                            } catch (\Throwable $e) {
                                // ignore invalid existing value
                            }
                        }
                    }),

                Forms\Components\DatePicker::make('tanggal_mulai_date')
                    ->label('Tanggal Mulai')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set, $get) {
                        $time = $get('tanggal_mulai_time') ?? '00:00';
                        $set('tanggal_mulai', $state . ' ' . $time . ':00');
                    }),

                Forms\Components\TimePicker::make('tanggal_mulai_time')
                    ->label('Waktu Mulai')
                    ->required()
                    ->reactive()
                    ->withoutSeconds()
                    ->afterStateUpdated(function ($state, callable $set, $get) {
                        $date = $get('tanggal_mulai_date') ?? now()->toDateString();
                        $set('tanggal_mulai', $date . ' ' . $state . ':00');
                    }),

                // optional end datetime: allow null
                Forms\Components\Hidden::make('tanggal_selesai')
                    ->dehydrated()
                    ->afterStateHydrated(function ($state, callable $set) {
                        if ($state) {
                            try {
                                $dt = \Carbon\Carbon::parse($state);
                                $set('tanggal_selesai_date', $dt->toDateString());
                                $set('tanggal_selesai_time', $dt->format('H:i'));
                            } catch (\Throwable $e) {
                                // ignore
                            }
                        }
                    }),

                Forms\Components\DatePicker::make('tanggal_selesai_date')
                    ->label('Tanggal Selesai (Opsional)')
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set, $get) {
                        $time = $get('tanggal_selesai_time');
                        if ($state && $time) {
                            $set('tanggal_selesai', $state . ' ' . $time . ':00');
                        }
                    }),

                Forms\Components\TimePicker::make('tanggal_selesai_time')
                    ->label('Waktu Selesai (Opsional)')
                    ->reactive()
                    ->withoutSeconds()
                    ->afterStateUpdated(function ($state, callable $set, $get) {
                        $date = $get('tanggal_selesai_date');
                        if ($date && $state) {
                            $set('tanggal_selesai', $date . ' ' . $state . ':00');
                        }
                    }),

                Forms\Components\Select::make("status")
                    ->options([
                        "upcoming" => "Akan Datang",
                        "ongoing" => "Sedang Berlangsung",
                        "completed" => "Selesai",
                    ])
                    ->required()
                    ->default("upcoming"),
            ]),

            Forms\Components\Section::make("Konten")->schema([
                Forms\Components\FileUpload::make("featured_image")
                    ->image()
                    ->disk('public')
                    ->directory("kegiatan")
                    ->visibility("public")
                    ->imageResizeMode("cover")
                    ->imageCropAspectRatio("16:9")
                    ->imageResizeTargetWidth("1200")
                    ->imageResizeTargetHeight("675"),

                Forms\Components\RichEditor::make("deskripsi")
                    ->label('Deskripsi')
                    ->required()
                    ->columnSpanFull()
                    ->toolbarButtons([
                        "bold",
                        "italic",
                        "underline",
                        "strike",
                        "orderedList",
                        "bulletList",
                        "h2",
                        "h3",
                        "h4",
                        "h5",
                        "alignLeft",
                        "alignCenter",
                        "alignRight",
                        "link",
                        "undo",
                        "redo",
                        "blockquote",
                        "indent",
                        "outdent",
                    ])
                    ->helperText("Gunakan toolbar untuk memformat teks deskripsi kegiatan."),
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
                    "Dibuat Oleh"
                ),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make("status")->options([
                    "upcoming" => "Akan Datang",
                    "ongoing" => "Sedang Berlangsung",
                    "completed" => "Selesai",
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

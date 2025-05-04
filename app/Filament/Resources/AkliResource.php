<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AkliResource\Pages;
use App\Filament\Resources\AkliResource\RelationManagers;
use App\Mail\SendEmail;
use App\Models\Akli;
use Dotswan\MapPicker\Fields\Map;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Mail;
use Filament\Forms\Set;
use Illuminate\Support\Facades\Log;

class AkliResource extends Resource
{
    protected static ?string $model = Akli::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {


        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_hp')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('latitude')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('longitude')
                    ->required()
                    ->maxLength(255),


                Map::make('alamat')
                    ->label('Lokasi')
                    ->showMarker(true)
                    ->showZoomControl(false) // Nonaktifkan kontrol zoom
                    ->draggable(false) // Nonaktifkan drag/geser
                    ->clickable(false)
                    ->tilesUrl("https://tile.openstreetmap.org/{z}/{x}/{y}.png") // Menggunakan openstreetmap.org langsung
                    ->zoom(12)
                    ->detectRetina()
                    ->afterStateUpdated(function (Set $set, ?array $state) {
                        if ($state && isset($state['lat'], $state['lng'])) {
                            $lat = $state['lat'];
                            $lng = $state['lng'];

                            $set('latitude', $lat);
                            $set('longitude', $lng);

                            $url = "https://nominatim.openstreetmap.org/reverse?format=json&lat={$lat}&lon={$lng}&addressdetails=1";

                            try {
                                // Menggunakan HTTP client yang lebih baik daripada file_get_contents
                                $client = new \GuzzleHttp\Client();
                                $response = $client->get($url, [
                                    'headers' => [
                                        'User-Agent' => 'Your-App-Name/1.0 (your@email.com)', // Wajib untuk Nominatim
                                        'Accept' => 'application/json',
                                    ],
                                    'timeout' => 5 // Timeout 5 detik
                                ]);

                                if ($response->getStatusCode() === 200) {
                                    $data = json_decode($response->getBody(), true);
                                    if (isset($data['display_name'])) {
                                        $alamat = $data['display_name'];
                                        $set('alamat', $alamat);
                                        $set('latitude', $lat);
                                        $set('longitude', $lng);
                                    }
                                }
                            } catch (\Exception $e) {
                                // Tangani kesalahan jika perlu
                                Log::error('Guzzle HTTP error: ' . $e->getMessage());
                            }
                        }
                    }),

                TextInput::make('alamat')
                    ->label('Alamat Lengkap')
                    ->columnSpanFull()
                    ->readOnly()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_hp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('latitude')
                    ->searchable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public function getActions(): array
    {
        return [
            Action::make('kirimEmail')
                ->form([
                    TextInput::make('email')
                        ->email()
                        ->required(),
                    Textarea::make('pesan')
                        ->required(),
                ])
                ->action(function (array $data) {
                    Mail::to($data['email'])
                        ->send(new SendEmail($data['pesan']));

                    Notification::make()
                        ->title('Email berhasil dikirim')
                        ->success()
                        ->send();
                }),
        ];
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
            'index' => Pages\ListAklis::route('/'),
            'create' => Pages\CreateAkli::route('/create'),
            'view' => Pages\ViewAkli::route('/{record}'),
            'edit' => Pages\EditAkli::route('/{record}/edit'),
        ];
    }
}

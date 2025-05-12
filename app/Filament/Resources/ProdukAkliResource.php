<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukAkliResource\Pages;
use App\Filament\Resources\ProdukAkliResource\RelationManagers;
use App\Models\ProdukAkli;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProdukAkliResource extends Resource
{
    protected static ?string $model = ProdukAkli::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('detail')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('gambar_file')
                    ->label('Upload Gambar')
                    ->image()
                    ->directory('uploads/gambar-produk') // folder penyimpanan
                    ->imagePreviewHeight('250') // opsional
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('detail')
                    ->searchable(),
                ImageColumn::make('gambar_file')
                    ->label('Gambar')
                    ->disk('public') // Pastikan disk 'public' sudah terkonfigurasi dengan benar
                    ->height(60),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                ToggleColumn::make('status_produk')
                    ->label('Status Kirim')  // Menambahkan label untuk status kirim
                    ->sortable()  // Membuat kolom dapat disortir
                    ->toggleable(isToggledHiddenByDefault: false)  // Membuat kolom bisa disembunyikan/tampilkan

                    ->onColor('success')  // Warna ketika aktif
                    ->offColor('danger'),  // Warna ketika tidak aktif
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProdukAklis::route('/'),
            'create' => Pages\CreateProdukAkli::route('/create'),
            'view' => Pages\ViewProdukAkli::route('/{record}'),
            'edit' => Pages\EditProdukAkli::route('/{record}/edit'),
        ];
    }
}

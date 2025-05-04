<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukResource\Pages;
use App\Filament\Resources\ProdukResource\RelationManagers;
use App\Models\Produk;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Produk';
    public static function getNavigationGroup(): ?string
    {
        $navigationGroup = config('filament-shield.navigation.admin', 'Default Group');
        # cari di filament-shield


        return $navigationGroup;
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bahan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('warna')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ukuran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('fungsi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('keunggulan')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('gambar')
                    ->label('Upload Foto Produk 1')
                    ->image()
                    ->directory('filaments')
                    ->disk('public')
                    ->preserveFilenames()
                    ->imagePreviewHeight('100')
                    ->downloadable()
                    ->openable(),
                FileUpload::make('gambar1')
                    ->label('Upload Foto Produk 2')
                    ->image()
                    ->directory('filaments')
                    ->disk('public')
                    ->preserveFilenames()
                    ->imagePreviewHeight('100')
                    ->downloadable()
                    ->openable(),
                FileUpload::make('gambar2')
                    ->label('Upload Foto Produk 3')
                    ->image()
                    ->directory('filaments')
                    ->disk('public')
                    ->preserveFilenames()
                    ->imagePreviewHeight('100')
                    ->downloadable()
                    ->openable(),
                Forms\Components\TextInput::make('deskripsi')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bahan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('warna')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ukuran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fungsi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('keunggulan')
                    ->searchable(),
                ImageColumn::make('gambar')
                    ->label('Gambar 1')
                    ->disk('public')  // Pastikan disk ini sudah terkonfigurasi dengan benar di config/filesystems.php
                    ->height(60),

                ImageColumn::make('gambar2')
                    ->label('Gambar 2')
                    ->disk('public')  // Pastikan disk ini sudah terkonfigurasi dengan benar di config/filesystems.php
                    ->height(60),

                ImageColumn::make('gambar3')
                    ->label('Gambar 3')
                    ->disk('public')  // Pastikan disk ini sudah terkonfigurasi dengan benar di config/filesystems.php
                    ->height(60),
                Tables\Columns\TextColumn::make('deskripsi')
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'view' => Pages\ViewProduk::route('/{record}'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}

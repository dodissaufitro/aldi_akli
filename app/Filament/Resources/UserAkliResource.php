<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserAkliResource\Pages;
use App\Filament\Resources\UserAkliResource\RelationManagers;
use App\Models\UserAkli;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserAkliResource extends Resource
{
    protected static ?string $model = UserAkli::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('email')  // Ganti dengan nama field yang sesuai
                    ->required()  // Tetap wajib diisi
                    ->maxLength(255)  // Batas panjang karakter
                    ->rows(4),  // Jumlah baris untuk textarea
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
                ToggleColumn::make('status_email')
                    ->label('Status Kirim')  // Menambahkan label untuk status kirim
                    ->sortable()  // Membuat kolom dapat disortir
                    ->toggleable(isToggledHiddenByDefault: false),
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
            'index' => Pages\ListUserAklis::route('/'),
            'create' => Pages\CreateUserAkli::route('/create'),
            'view' => Pages\ViewUserAkli::route('/{record}'),
            'edit' => Pages\EditUserAkli::route('/{record}/edit'),
        ];
    }
}

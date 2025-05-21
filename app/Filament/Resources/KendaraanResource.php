<?php

namespace App\Filament\Resources;

use App\Models\Kendaraan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

use App\Filament\Resources\KendaraanResource\Pages;

class KendaraanResource extends Resource
{
    protected static ?string $model = Kendaraan::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('supir_id')
                ->relationship('supir', 'nama')
                ->required(),

            TextInput::make('plat_nomor')->required(),
            TextInput::make('merk')->required(),
            TextInput::make('jenis')->required(),
            TextInput::make('tahun')->numeric()->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('supir.nama')->label('Supir'),
            TextColumn::make('plat_nomor'),
            TextColumn::make('merk'),
            TextColumn::make('jenis'),
            TextColumn::make('tahun'),
        ])
        ->actions([Tables\Actions\EditAction::make()])
        ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKendaraans::route('/'),
            'create' => Pages\CreateKendaraan::route('/create'),
            'edit' => Pages\EditKendaraan::route('/{record}/edit'),
        ];
    }
}

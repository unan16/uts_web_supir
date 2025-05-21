<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RiwayatPerjalananResource\Pages;
use App\Models\RiwayatPerjalanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class RiwayatPerjalananResource extends Resource
{
    protected static ?string $model = RiwayatPerjalanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('supir_id')
                    ->relationship('supir', 'nama')
                    ->label('Supir')
                    ->required(),

                TextInput::make('tujuan')
                    ->required()
                    ->maxLength(255),

                DatePicker::make('tanggal_berangkat')
                    ->required(),

                TimePicker::make('jam_berangkat')
                    ->required(),

                TextInput::make('keterangan')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('supir.nama')->label('Supir'),
                TextColumn::make('tujuan'),
                TextColumn::make('tanggal_berangkat')->date(),
                TextColumn::make('jam_berangkat'),
                TextColumn::make('keterangan')->limit(50),
            ])
            ->filters([])
            ->actions([
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRiwayatPerjalanans::route('/'),
            'create' => Pages\CreateRiwayatPerjalanan::route('/create'),
            'edit' => Pages\EditRiwayatPerjalanan::route('/{record}/edit'),
        ];
    }
}

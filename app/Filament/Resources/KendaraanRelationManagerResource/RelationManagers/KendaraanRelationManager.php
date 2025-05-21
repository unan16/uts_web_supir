<?php

namespace App\Filament\Resources\SupirResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\RelationManagers\RelationManager;

class KendaraanRelationManager extends RelationManager
{
    protected static string $relationship = 'kendaraan';

    protected static ?string $recordTitleAttribute = 'plat_nomor';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('plat_nomor')->required(),
            Forms\Components\TextInput::make('merk')->required(),
            Forms\Components\TextInput::make('jenis')->required(),
            Forms\Components\TextInput::make('tahun')->required()->numeric(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('plat_nomor')->searchable(),
            Tables\Columns\TextColumn::make('merk'),
            Tables\Columns\TextColumn::make('jenis'),
            Tables\Columns\TextColumn::make('tahun'),
        ])
        ->headerActions([
            Tables\Actions\CreateAction::make(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
    }
}

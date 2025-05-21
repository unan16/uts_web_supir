<?php

namespace App\Filament\Resources\SupirResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\RelationManagers\RelationManager;

class RiwayatPerjalanansRelationManager extends RelationManager
{
    protected static string $relationship = 'riwayatPerjalanans';

    protected static ?string $recordTitleAttribute = 'tujuan';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('tujuan')->required(),
            Forms\Components\DatePicker::make('tanggal_berangkat')->required(),
            Forms\Components\TimePicker::make('jam_berangkat')->required(),
            Forms\Components\TextInput::make('keterangan')->maxLength(255),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('tujuan'),
            Tables\Columns\TextColumn::make('tanggal_berangkat')->date(),
            Tables\Columns\TextColumn::make('jam_berangkat'),
            Tables\Columns\TextColumn::make('keterangan')->limit(30),
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

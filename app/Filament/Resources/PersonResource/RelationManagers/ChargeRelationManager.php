<?php

namespace App\Filament\Resources\PersonResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;

class ChargeRelationManager extends RelationManager
{
    protected static string $relationship = 'charges';

    public function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\Select::make('ministry_id')
                    ->label('Ministerio')
                    ->relationship(
                        'ministry',
                        'name'
                    )
                    ->createOptionForm([
                        TextInput::make('name')
                            ->label('Nombre')
                            ->required(),
                        Checkbox::make('society')
                            ->label('Sociedad'),
                    ])
                    ->required(),
                Forms\Components\Checkbox::make('leader')
                    ->label('Líder'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('privilegio')
            ->columns([
                Tables\Columns\TextColumn::make(name: 'ministry.name')
                    ->label('Ministerio')
                    ->searchable(),
                Tables\Columns\TextColumn::make(name: 'leader')
                    ->label('Líder')
                    ->formatStateUsing(function ($state) {
                        return $state ? 'Sí' : 'No';
                    }),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

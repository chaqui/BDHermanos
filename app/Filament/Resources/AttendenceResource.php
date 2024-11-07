<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendenceResource\Pages;
use App\Filament\Resources\AttendenceResource\RelationManagers;
use App\Models\Attendence;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttendenceResource extends Resource
{
    protected static ?string $model = Attendence::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('activity_id')
                    ->label('Activity')
                    ->relationship('activity', 'name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->label('Name')
                            ->required(),
                    ])
                    ->required(),
                Forms\Components\TextInput::make('kids')
                    ->label('Niños')
                    ->integer()
                    ->minLength(0),
                Forms\Components\TextInput::make('men')
                    ->label('Hombres')
                    ->integer()
                    ->minLength(0),
                Forms\Components\TextInput::make('ladies')
                    ->label('Mujeres')
                    ->integer()
                    ->minLength(0),
                Forms\Components\TextInput::make('youths')
                    ->label('Jóvenes')
                    ->integer()
                    ->minLength(0),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('activity.name')
                    ->label('Actividad')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kids')
                    ->label('Niños')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('men')
                    ->label('Hombres')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ladies')
                    ->label('Mujeres')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('youths')
                    ->label('Jóvenes')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAttendences::route('/'),
            'create' => Pages\CreateAttendence::route('/create'),
            'edit' => Pages\EditAttendence::route('/{record}/edit'),
        ];
    }
}

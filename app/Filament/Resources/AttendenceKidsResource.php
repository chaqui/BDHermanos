<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendenceKidsResource\Pages;
use App\Filament\Resources\AttendenceKidsResource\RelationManagers;
use App\Models\AttendenceKids;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttendenceKidsResource extends Resource
{
    protected static ?string $model = AttendenceKids::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('kids')
                    ->label('Niños')
                    ->integer()
                    ->minLength(0),
                TextInput::make('small_child')
                    ->label('Niños pequeños')
                    ->integer()
                    ->minLength(0),
                TextInput::make('pre_young')
                    ->label('Pre jóvenes')
                    ->integer()
                    ->minLength(0),
                TextInput::make('young')
                    ->label('Jóvenes')
                    ->integer()
                    ->minLength(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Fecha')
                    ->dateTime('d/m/Y'),
                Tables\Columns\TextColumn::make('kids')
                    ->label('Niños'),
                Tables\Columns\TextColumn::make('small_child')
                    ->label('Niños pequeños'),
                Tables\Columns\TextColumn::make('pre_young')
                    ->label('Pre jóvenes'),
                Tables\Columns\TextColumn::make('young')
                    ->label('Jóvenes'),
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
            'index' => Pages\ListAttendenceKids::route('/'),
            'create' => Pages\CreateAttendenceKids::route('/create'),
            'edit' => Pages\EditAttendenceKids::route('/{record}/edit'),
        ];
    }
}

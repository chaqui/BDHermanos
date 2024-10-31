<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PreJuvenilResource\Pages;
use App\Filament\Resources\PreJuvenilResource\RelationManagers;
use App\Models\PreJuvenil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PreJuvenilResource extends Resource
{
    protected static ?string $model = PreJuvenil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListPreJuvenils::route('/'),
            'create' => Pages\CreatePreJuvenil::route('/create'),
            'edit' => Pages\EditPreJuvenil::route('/{record}/edit'),
        ];
    }
}

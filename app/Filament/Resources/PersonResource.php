<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonResource\Pages;
use App\Filament\Resources\PersonResource\RelationManagers;
use App\Models\Person;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class PersonResource extends Resource
{
    protected static ?string $model = Person::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make("Información Personal")
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nombre')
                            ->required(),
                        Forms\Components\TextInput::make('last_name')
                            ->label('Apellido')
                            ->required(),
                        Forms\Components\TextInput::make('email')
                            ->label('Correo Electrónico')
                            ->email()
                            ->nullable(),
                        Forms\Components\TextInput::make('phone')
                            ->label('Teléfono')
                            ->required(),
                        Forms\Components\TextInput::make('address')
                            ->label('Dirección')
                            ->required(),
                        Forms\Components\TextInput::make('city')
                            ->label('Ciudad')
                            ->required(),
                        Forms\Components\Select::make('gender')
                            ->label('Género')
                            ->options([
                                'M' => 'Masculino',
                                'F' => 'Femenino'
                            ]),
                        Forms\Components\Datepicker::make('birthday')
                            ->label('Fecha de Nacimiento')
                            ->required(),
                    ]),
                Section::make("Información Ministerial")
                    ->columns(2)
                    ->schema([

                        Forms\Components\Checkbox::make('assistant')
                            ->label('Asistente'),
                        Forms\Components\Checkbox::make('member')
                            ->label('Miembro'),
                        Forms\Components\Datepicker::make('baptism_date')
                            ->label('Fecha de Bautismo')
                            ->nullable(),
                        Forms\Components\Datepicker::make('conversion_date')
                            ->label('Fecha de Conversión')
                            ->nullable(),
                        Forms\Components\Datepicker::make('membership_date')
                            ->label('Fecha de Membresía')
                            ->nullable(),
                    ]),
                Section::make("Información Familiar")
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('mother_id')
                            ->label('Madre')
                            ->relationship(
                                'mother',
                                'name'
                            )
                            ->createOptionForm([
                                Section::make("Información Personal")
                                    ->columns(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('name')
                                            ->label('Nombre')
                                            ->required(),
                                        Forms\Components\TextInput::make('last_name')
                                            ->label('Apellido')
                                            ->required(),
                                        Forms\Components\TextInput::make('email')
                                            ->label('Correo Electrónico')
                                            ->email()
                                            ->nullable(),
                                        Forms\Components\TextInput::make('phone')
                                            ->label('Teléfono')
                                            ->required(),
                                        Forms\Components\TextInput::make('address')
                                            ->label('Dirección')
                                            ->required(),
                                        Forms\Components\TextInput::make('city')
                                            ->label('Ciudad')
                                            ->required(),
                                        Forms\Components\Select::make('gender')
                                            ->label('Género')
                                            ->options([
                                                'M' => 'Masculino',
                                                'F' => 'Femenino'
                                            ]),
                                        Forms\Components\Datepicker::make('birthday')
                                            ->label('Fecha de Nacimiento')
                                            ->required(),
                                    ])
                            ])
                            ->searchable()
                            ->nullable(),
                        Forms\Components\Select::make('father_id')
                            ->label('Padre')
                            ->relationship(
                                'father',
                                'name'
                            )
                            ->createOptionForm([
                                Section::make("Información Personal")
                                    ->columns(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('name')
                                            ->label('Nombre')
                                            ->required(),
                                        Forms\Components\TextInput::make('last_name')
                                            ->label('Apellido')
                                            ->required(),
                                        Forms\Components\TextInput::make('email')
                                            ->label('Correo Electrónico')
                                            ->email()
                                            ->nullable(),
                                        Forms\Components\TextInput::make('phone')
                                            ->label('Teléfono')
                                            ->required(),
                                        Forms\Components\TextInput::make('address')
                                            ->label('Dirección')
                                            ->required(),
                                        Forms\Components\TextInput::make('city')
                                            ->label('Ciudad')
                                            ->required(),
                                        Forms\Components\Select::make('gender')
                                            ->label('Género')
                                            ->options([
                                                'M' => 'Masculino',
                                                'F' => 'Femenino'
                                            ]),
                                        Forms\Components\Datepicker::make('birthday')
                                            ->label('Fecha de Nacimiento')
                                            ->required(),
                                    ])
                            ])
                            ->searchable()

                            ->nullable(),
                        Forms\Components\Select::make('spouse_id')
                            ->label('Cónyuge')
                            ->searchable()
                            ->relationship(
                                'spouse',
                                'name'
                            )
                            ->createOptionForm([
                                Section::make("Información Personal")
                                    ->columns(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('name')
                                            ->label('Nombre')
                                            ->required(),
                                        Forms\Components\TextInput::make('last_name')
                                            ->label('Apellido')
                                            ->required(),
                                        Forms\Components\TextInput::make('email')
                                            ->label('Correo Electrónico')
                                            ->email()
                                            ->nullable(),
                                        Forms\Components\TextInput::make('phone')
                                            ->label('Teléfono')
                                            ->required(),
                                        Forms\Components\TextInput::make('address')
                                            ->label('Dirección')
                                            ->required(),
                                        Forms\Components\TextInput::make('city')
                                            ->label('Ciudad')
                                            ->required(),
                                        Forms\Components\Select::make('gender')
                                            ->label('Género')
                                            ->options([
                                                'M' => 'Masculino',
                                                'F' => 'Femenino'
                                            ]),
                                        Forms\Components\Datepicker::make('birthday')
                                            ->label('Fecha de Nacimiento')
                                            ->required(),
                                    ])
                            ])
                            ->nullable(),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable(),
                TextColumn::make('last_name')
                    ->label('Apellido')
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Teléfono'),
                TextColumn::make('address')
                    ->label('Dirección'),
                TextColumn::make('city')
                    ->label('Ciudad'),
                TextColumn::make('assistant')
                    ->label('Asistente')
                    ->formatStateUsing(function ($state) {
                        return $state ? 'Sí' : 'No';
                    }),
                TextColumn::make('member')
                    ->label('Miembro')
                    ->formatStateUsing(function ($state) {
                        return $state ? 'Sí' : 'No';
                    }),

            ])
            ->filters([
                SelectFilter::make('assistant')
                    ->label('Asistente')
                    ->options([
                        '1' => 'Sí',
                        '0' => 'No',
                    ]),
                SelectFilter::make('member')
                    ->label('Miembro')
                    ->options([
                        '1' => 'Sí',
                        '0' => 'No',
                    ]),
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
            RelationManagers\ChargeRelationManager::class,
            RelationManagers\AnnotationsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPeople::route('/'),
            'create' => Pages\CreatePerson::route('/create'),
            'edit' => Pages\EditPerson::route('/{record}/edit'),
        ];
    }
}

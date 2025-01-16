<?php

namespace App\Filament\Resources\AttendenceKidsResource\Pages;

use App\Filament\Resources\AttendenceKidsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAttendenceKids extends EditRecord
{
    protected static string $resource = AttendenceKidsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

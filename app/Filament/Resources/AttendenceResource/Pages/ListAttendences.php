<?php

namespace App\Filament\Resources\AttendenceResource\Pages;

use App\Filament\Resources\AttendenceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAttendences extends ListRecords
{
    protected static string $resource = AttendenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

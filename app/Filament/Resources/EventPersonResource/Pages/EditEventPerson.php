<?php

namespace App\Filament\Resources\EventPersonResource\Pages;

use App\Filament\Resources\EventPersonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventPerson extends EditRecord
{
    protected static string $resource = EventPersonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

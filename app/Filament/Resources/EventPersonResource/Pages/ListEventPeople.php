<?php

namespace App\Filament\Resources\EventPersonResource\Pages;

use App\Filament\Resources\EventPersonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventPeople extends ListRecords
{
    protected static string $resource = EventPersonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

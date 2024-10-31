<?php

namespace App\Filament\Resources\PreJuvenilResource\Pages;

use App\Filament\Resources\PreJuvenilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPreJuvenils extends ListRecords
{
    protected static string $resource = PreJuvenilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\MinisterioMiembroResource\Pages;

use App\Filament\Resources\MinisterioMiembroResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMinisterioMiembros extends ListRecords
{
    protected static string $resource = MinisterioMiembroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\JovenResource\Pages;

use App\Filament\Resources\JovenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJovens extends ListRecords
{
    protected static string $resource = JovenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\NinioResource\Pages;

use App\Filament\Resources\NinioResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNinios extends ListRecords
{
    protected static string $resource = NinioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

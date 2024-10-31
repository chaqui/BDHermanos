<?php

namespace App\Filament\Resources\NinioResource\Pages;

use App\Filament\Resources\NinioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNinio extends EditRecord
{
    protected static string $resource = NinioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

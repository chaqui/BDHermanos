<?php

namespace App\Filament\Resources\MadreResource\Pages;

use App\Filament\Resources\MadreResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMadre extends EditRecord
{
    protected static string $resource = MadreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

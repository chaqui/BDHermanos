<?php

namespace App\Filament\Resources\MinisterioMiembroResource\Pages;

use App\Filament\Resources\MinisterioMiembroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMinisterioMiembro extends EditRecord
{
    protected static string $resource = MinisterioMiembroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

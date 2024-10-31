<?php

namespace App\Filament\Resources\PreJuvenilResource\Pages;

use App\Filament\Resources\PreJuvenilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPreJuvenil extends EditRecord
{
    protected static string $resource = PreJuvenilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

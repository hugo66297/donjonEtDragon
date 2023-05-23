<?php

namespace App\Filament\Resources\SubraceResource\Pages;

use App\Filament\Resources\SubraceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubrace extends EditRecord
{
    protected static string $resource = SubraceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

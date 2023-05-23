<?php

namespace App\Filament\Resources\BackgroundResource\Pages;

use App\Filament\Resources\BackgroundResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBackground extends EditRecord
{
    protected static string $resource = BackgroundResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

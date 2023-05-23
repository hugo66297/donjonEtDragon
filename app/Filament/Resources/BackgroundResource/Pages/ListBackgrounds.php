<?php

namespace App\Filament\Resources\BackgroundResource\Pages;

use App\Filament\Resources\BackgroundResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBackgrounds extends ListRecords
{
    protected static string $resource = BackgroundResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

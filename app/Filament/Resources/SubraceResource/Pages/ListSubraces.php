<?php

namespace App\Filament\Resources\SubraceResource\Pages;

use App\Filament\Resources\SubraceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubraces extends ListRecords
{
    protected static string $resource = SubraceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

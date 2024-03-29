<?php

namespace App\Filament\Resources\WeaponResource\Pages;

use App\Filament\Resources\WeaponResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWeapons extends ListRecords
{
    protected static string $resource = WeaponResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

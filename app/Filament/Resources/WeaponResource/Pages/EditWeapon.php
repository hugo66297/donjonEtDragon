<?php

namespace App\Filament\Resources\WeaponResource\Pages;

use App\Filament\Resources\WeaponResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWeapon extends EditRecord
{
    protected static string $resource = WeaponResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

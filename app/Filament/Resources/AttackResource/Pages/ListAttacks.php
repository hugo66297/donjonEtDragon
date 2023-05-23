<?php

namespace App\Filament\Resources\AttackResource\Pages;

use App\Filament\Resources\AttackResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAttacks extends ListRecords
{
    protected static string $resource = AttackResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

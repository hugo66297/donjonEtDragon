<?php

namespace App\Filament\Resources\GoalResource\Pages;

use App\Filament\Resources\GoalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGoal extends EditRecord
{
    protected static string $resource = GoalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

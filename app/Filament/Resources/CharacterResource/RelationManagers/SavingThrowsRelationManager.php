<?php

namespace App\Filament\Resources\CharacterResource\RelationManagers;

use App\Models\SavingThrow;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SavingThrowsRelationManager extends RelationManager
{
    protected static string $relationship = 'savingThrows';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('other_modifier_throw')
                    ->numeric(),
                Forms\Components\Toggle::make('is_proficient')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\ToggleColumn::make('is_proficient'),
                Tables\Columns\TextColumn::make('other_modifier_throw'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->visible(fn(AttachAction $action): bool => $action->getTable()->getLivewire()->ownerRecord->savingThrows->count() < 6)
                    ->form(fn(AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->options(
                                SavingThrow::whereNotIn('id', $action->getTable()->getLivewire()->ownerRecord->savingThrows->pluck('id'))
                                    ->pluck('name', 'id')),
                        Forms\Components\TextInput::make('other_modifier_throw')
                            ->numeric(),
                        Forms\Components\Toggle::make('is_proficient')
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DetachBulkAction::make(),
            ]);
    }
}

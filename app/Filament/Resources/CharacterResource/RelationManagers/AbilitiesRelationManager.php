<?php

namespace App\Filament\Resources\CharacterResource\RelationManagers;

use App\Models\Ability;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbilitiesRelationManager extends RelationManager
{
    protected static string $relationship = 'abilities';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ability_value')
                    ->default(0)
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('other_modifier_ability')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('ability_value'),
                Tables\Columns\TextColumn::make('other_modifier_ability'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->visible(fn(AttachAction $action): bool => $action->getTable()->getLivewire()->ownerRecord->abilities->count() < 6)
                    ->form(fn(AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->options(
                                Ability::whereNotIn('id', $action->getTable()->getLivewire()->ownerRecord->abilities->pluck('id'))
                                    ->pluck('name', 'id')),
                        Forms\Components\TextInput::make('ability_value')
                            ->default(0)
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('other_modifier_ability')
                            ->numeric(),
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

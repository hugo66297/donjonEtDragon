<?php

namespace App\Filament\Resources\CharacterResource\RelationManagers;

use App\Models\Coin;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CoinsRelationManager extends RelationManager
{
    protected static string $relationship = 'coins';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('quantity')
                    ->default(0)
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('quantity'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->visible(fn (AttachAction $action): bool => $action->getTable()->getLivewire()->ownerRecord->coins->count() < 5)
                    ->form(fn (AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->options(
                                Coin::whereNotIn('id', $action->getTable()->getLivewire()->ownerRecord->coins->pluck('id'))
                                    ->pluck('name', 'id')),
                        Forms\Components\TextInput::make('quantity')
                            ->default(0)
                            ->numeric(),
                ]),
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

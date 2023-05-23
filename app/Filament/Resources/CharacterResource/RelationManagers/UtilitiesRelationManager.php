<?php

namespace App\Filament\Resources\CharacterResource\RelationManagers;

use App\Models\Utility;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class UtilitiesRelationManager extends RelationManager
{
    protected static string $relationship = 'utilities';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('description')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description')
                    ->getStateUsing(fn(Model $record) => Str::words($record->description, 10)),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->form(fn(AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->options(
                                Utility::whereNotIn('id', $action->getTable()->getLivewire()->ownerRecord->utilities->pluck('id'))
                                    ->pluck('name', 'id')),
                        Forms\Components\Textarea::make('description')
                            ->required(),
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

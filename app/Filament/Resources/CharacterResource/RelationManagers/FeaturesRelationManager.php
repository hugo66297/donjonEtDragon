<?php

namespace App\Filament\Resources\CharacterResource\RelationManagers;

use App\Models\Feature;
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

class FeaturesRelationManager extends RelationManager
{
    protected static string $relationship = 'features';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([]);
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
                                Feature::whereNotIn('id', $action->getTable()->getLivewire()->ownerRecord->features->pluck('id'))
                                    ->pluck('name', 'id')),
                    ]),
            ])
            ->actions([
                Tables\Actions\DetachAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DetachBulkAction::make(),
            ]);
    }
}

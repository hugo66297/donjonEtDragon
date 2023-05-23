<?php

namespace App\Filament\Resources\CharacterResource\RelationManagers;

use App\Models\Attack;
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

class AttacksRelationManager extends RelationManager
{
    protected static string $relationship = 'attacks';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('other_description')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description')
                    ->getStateUsing(function (Model $record) {
                        return $record->description
                            ? Str::words($record->description, 10)
                            : Str::words($record->other_description, 10);
                    }),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->form(fn(AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->reactive()
                            ->options(
                                Attack::whereNotIn('id', $action->getTable()->getLivewire()->ownerRecord->attacks->pluck('id'))
                                    ->pluck('name', 'id')),
                        Forms\Components\Textarea::make('other_description')
                            ->hidden(function (\Closure $get) use ($action) {
                                $name = $action->getRecordSelect()->getName();
                                return $get($name) !== null && Attack::find($get($name))->description;
                            }),
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

<?php

namespace App\Filament\Resources\CharacterResource\RelationManagers;

use App\Models\Weapon;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WeaponsRelationManager extends RelationManager
{
    protected static string $relationship = 'weapons';

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
                Tables\Columns\TextColumn::make('atk_bonus'),
                Tables\Columns\TextColumn::make('damage_type'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->form(fn(AttachAction $action): array => [
                        Select::make('atk_bonus')
                            ->options(function () {
                                return \DB::table('weapons')
                                    ->distinct()
                                    ->orderBy('atk_bonus')
                                    ->pluck('atk_bonus', 'atk_bonus');
                            }),
                        Select::make('damage_type')
                            ->options(function () {
                                return \DB::table('weapons')
                                    ->distinct()
                                    ->pluck('damage_type', 'damage_type');
                            }),
                        $action->getRecordSelect()
                            ->name('weapons')
                            ->reactive()
                            ->options(function (callable $get) use ($action) {
                                $query = Weapon::whereNotIn('id', $action->getTable()->getLivewire()->ownerRecord->weapons->pluck('id'));
                                if ($get('atk_bonus')) {
                                    $query->where('atk_bonus', $get('atk_bonus'));
                                }
                                if ($get('damage_type')) {
                                    $query->where('damage_type', $get('damage_type'));
                                }
                                return $query->pluck('name', 'id');
                            }),
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

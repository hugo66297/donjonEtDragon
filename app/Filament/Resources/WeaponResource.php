<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WeaponResource\Pages;
use App\Filament\Resources\WeaponResource\RelationManagers;
use App\Models\Weapon;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class WeaponResource extends Resource
{
    protected static ?string $model = Weapon::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable(),
                TextColumn::make('atk_bonus')
                    ->getStateUsing(function (Model $record) {
                        return $record->atk_bonus > 0 ? "+$record->atk_bonus" : "-$record->atk_bonus";
                    })
                    ->sortable(),
                TextColumn::make('damage_type')
                    ->sortable(),
                TextColumn::make('description')
                    ->sortable()
                    ->wrap()
                    ->getStateUsing(fn(Model $record) => Str::words($record->sub_info, 15)),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWeapons::route('/'),
            'create' => Pages\CreateWeapon::route('/create'),
            'edit' => Pages\EditWeapon::route('/{record}/edit'),
        ];
    }
}

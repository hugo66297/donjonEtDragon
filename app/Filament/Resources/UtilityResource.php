<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UtilityResource\Pages;
use App\Filament\Resources\UtilityResource\RelationManagers;
use App\Models\Utility;
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

class UtilityResource extends Resource
{
    protected static ?string $model = Utility::class;

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
            ])
            ->filters([
                //
            ])
            ->actions([])
            ->bulkActions([]);
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
            'index' => Pages\ListUtilities::route('/'),
            'create' => Pages\CreateUtility::route('/create'),
            'edit' => Pages\EditUtility::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubraceResource\Pages;
use App\Filament\Resources\SubraceResource\RelationManagers;
use App\Models\Subrace;
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

class SubraceResource extends Resource
{
    protected static ?string $model = Subrace::class;

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
                TextColumn::make('race.name')
                    ->sortable(),
                TextColumn::make('name')
                    ->sortable(),
                TextColumn::make('full_name')
                    ->getStateUsing(function (Model $record) {
                        return $record->fullname();
                    })
                    ->sortable(),
                TextColumn::make('description')
                    ->sortable()
                    ->wrap()
                    ->getStateUsing(fn(Model $record) => Str::words($record->description, 15)),
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
            'index' => Pages\ListSubraces::route('/'),
            'create' => Pages\CreateSubrace::route('/create'),
            'edit' => Pages\EditSubrace::route('/{record}/edit'),
        ];
    }
}

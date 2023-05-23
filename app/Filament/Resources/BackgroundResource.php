<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BackgroundResource\Pages;
use App\Filament\Resources\BackgroundResource\RelationManagers;
use App\Models\Background;
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

class BackgroundResource extends Resource
{
    protected static ?string $model = Background::class;

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
                TextColumn::make('name')->sortable(),
                TextColumn::make('description')
                    ->sortable()
                    ->wrap()
                    ->getStateUsing(fn(Model $record) => Str::words($record->description, 30)),
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
            'index' => Pages\ListBackgrounds::route('/'),
            'create' => Pages\CreateBackground::route('/create'),
            'edit' => Pages\EditBackground::route('/{record}/edit'),
        ];
    }
}

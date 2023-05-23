<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdventureResource\Pages;
use App\Filament\Resources\AdventureResource\RelationManagers;
use App\Models\Adventure;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Forms\Components\ColorPicker;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class AdventureResource extends Resource
{
    protected static ?string $model = Adventure::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->reactive()
                    ->afterStateUpdated(function (\Closure $set, $state) {
                        $firstLetters = Arr::map(explode(" ", $state), function ($word) {
                            return \Str::upper(Str::substr($word, 0, 1));
                        });
                        $set('abbreviation', implode("", $firstLetters));
                    })
                    ->required(),
                TextInput::make('abbreviation')->required(),
                ColorPicker::make('text_color'),
                ColorPicker::make('bg_color')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable(),
                TextColumn::make('abbreviation')->sortable(),
                ColorColumn::make('text_color')
                    ->copyable()
                    ->copyMessage('Color code copied')
                    ->sortable(),
                ColorColumn::make('bg_color')
                    ->copyable()
                    ->copyMessage('Color code copied')
                    ->sortable(),
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
            'index' => Pages\ListAdventures::route('/'),
            'create' => Pages\CreateAdventure::route('/create'),
            'edit' => Pages\EditAdventure::route('/{record}/edit'),
        ];
    }
}

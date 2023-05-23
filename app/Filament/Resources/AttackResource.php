<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttackResource\Pages;
use App\Filament\Resources\AttackResource\RelationManagers;
use App\Models\Attack;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class AttackResource extends Resource
{
    protected static ?string $model = Attack::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->columnSpanFull(),
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
                    ->getStateUsing(function (Model $record) {
                        return $record->description
                            ? Str::words($record->description, 30)
                            : Str::words($record->other_description, 30);
                    }),
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
            'index' => Pages\ListAttacks::route('/'),
            'create' => Pages\CreateAttack::route('/create'),
            'edit' => Pages\EditAttack::route('/{record}/edit'),
        ];
    }
}

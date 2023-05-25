<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CharacterResource\Pages;
use App\Filament\Resources\CharacterResource\RelationManagers;
use App\Models\Adventure;
use App\Models\Character;
use App\Models\Coin;
use App\Models\Weapon;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Panel;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CharacterResource extends Resource
{
    protected static ?string $model = Character::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->schema([
                        Select::make('category_id')
                            ->relationship('category', 'name')
                            ->required(),
                        Select::make('background_id')
                            ->relationship('background', 'name')
                            ->required(),
                        Select::make('subrace_id')
                            ->relationship('subrace', 'name')
                            ->getOptionLabelFromRecordUsing(fn(Model $record) => $record->is_after
                                ? "{$record->race->name} {$record->name}"
                                : "{$record->name} {$record->race->name}"
                            )
                            ->required(),
                        Select::make('alignment_id')
                            ->relationship('alignment', 'name')
                            ->required(),
                        Select::make('goal_id')
                            ->relationship('goal', 'name')
                            ->required(),
                        Select::make('adventures')
                            ->multiple()
                            ->relationship('adventures', 'name')
                            ->preload()
                            ->required(),
                    ]),
                Textarea::make('character_past')
                    ->columnSpanFull(),
                Grid::make(3)
                    ->schema([
                        TextInput::make('armor_class')
                            ->type('number')
                            ->required(),
                        TextInput::make('initiative')
                            ->type('number')
                            ->required(),
                        TextInput::make('speed')
                            ->type('number')
                            ->required(),
                        TextInput::make('maximum_hp')
                            ->type('number')
                            ->required(),
                        TextInput::make('hit_dice')
                            ->required(),
                        TextInput::make('passive_wisdom')
                            ->type('number')
                            ->required(),
                    ]),
                Grid::make(2)
                    ->schema([
                        Textarea::make('personality_traits')
                            ->required(),
                        Textarea::make('ideals')
                            ->required(),
                        Textarea::make('bonds')
                            ->required(),
                        Textarea::make('flaws')
                            ->required(),
                    ]),
                MarkdownEditor::make('equipment')
                    ->required()
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category.name'),
                TextColumn::make('background.name'),
                TextColumn::make('race')
                    ->formatStateUsing(fn (Character $record): string => $record->subrace->fullName()),
                TextColumn::make('alignment.name'),
                TextColumn::make('goal.name')
                    ->formatStateUsing(fn(string $state): string => ucfirst($state)),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\AbilitiesRelationManager::class,
            RelationManagers\SavingThrowsRelationManager::class,
            RelationManagers\SkillsRelationManager::class,
            RelationManagers\WeaponsRelationManager::class,
            RelationManagers\AttacksRelationManager::class,
            RelationManagers\FeaturesRelationManager::class,
            RelationManagers\UtilitiesRelationManager::class,
            RelationManagers\CoinsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCharacters::route('/'),
            'create' => Pages\CreateCharacter::route('/create'),
            'edit' => Pages\EditCharacter::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceTaskResource\Pages;
use App\Filament\Resources\ExperienceTaskResource\RelationManagers;
use App\Models\ExperienceTask;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienceTaskResource extends Resource
{
    protected static ?string $model = ExperienceTask::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('experience_id')
                    ->relationship('experience', 'role')
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpan(2)
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->columnSpan(2)
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('experience.role'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
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
            'index' => Pages\ListExperienceTasks::route('/'),
            'create' => Pages\CreateExperienceTask::route('/create'),
            'edit' => Pages\EditExperienceTask::route('/{record}/edit'),
        ];
    }
}

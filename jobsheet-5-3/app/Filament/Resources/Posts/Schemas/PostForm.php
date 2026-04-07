<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Category;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Select::make('category_id')
                    ->label('Category')
                    ->options(Category::pluck('name', 'id'))
                    ->required(),
                TextInput::make('color')
                    ->maxLength(255)
                    ->nullable(),
                TextInput::make('image')
                    ->label('Image URL')
                    ->maxLength(255)
                    ->nullable(),
                RichEditor::make('body')
                    ->nullable(),
                TextInput::make('tags')
                    ->placeholder('Separated by comma')
                    ->nullable(),
                Toggle::make('published')
                    ->default(false),
                DatePicker::make('published_at')
                    ->nullable(),
            ]);
    }
}

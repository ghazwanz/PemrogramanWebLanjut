<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Category;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->minLength(5)
                    ->maxLength(255),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                Select::make('category_id')
                    ->label('Category')
                    ->options(\App\Models\Category::all()->pluck('name', 'id'))
                    ->required(),
                ColorPicker::make('color')
                    ->nullable(),
                FileUpload::make('image')
                    ->disk('public')
                    ->directory('post')
                    ->nullable(),
                RichEditor::make('body')
                    ->nullable(),
                TagsInput::make('tags')
                    ->nullable(),
                Checkbox::make('published')
                    ->default(false),
                DatePicker::make('published_at')
                    ->nullable(),
            ]);
    }
}

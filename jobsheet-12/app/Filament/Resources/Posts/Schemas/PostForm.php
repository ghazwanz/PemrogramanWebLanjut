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
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make([
                    Section::make('Post Details')
                        ->description('Fill in the details of the post')
                        ->icon('heroicon-o-document-text')
                        ->schema([
                            TextInput::make('title')
                                ->required()
                                ->rules(['min:5'])
                                ->maxLength(255)
                                ->validationMessages([
                                    'min' => 'Judul minimal 5 karakter.',
                                    'required' => 'Judul wajib diisi.',
                                ])
                                ,
                            TextInput::make('slug')
                                ->required()
                                ->unique()
                                ->rules(['min:3','required'])
                                ->maxLength(255)
                                ->validationMessages([
                                    'unique' => 'Slug harus unik dan tidak boleh sama.',
                                    'min' => 'Slug minimal 3 karakter.',
                                    'required' => 'Slug wajib diisi.',
                                ])
                                ,
                            Select::make('category_id')
                                ->label('Category')
                                ->options(Category::all()->pluck('name', 'id'))
                                ->required(),
                            ColorPicker::make('color')
                                ->nullable(),
                        ])->columns(2),

                    Section::make('Content')
                        ->icon('heroicon-o-pencil-square')
                        ->schema([
                            RichEditor::make('body')
                                ->nullable()
                                ->columnSpanFull(),
                        ]),
                ])->columnSpan(2),

                Group::make([
                    Section::make('Image Upload')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            FileUpload::make('image')
                                ->disk('public')
                                ->directory('post')
                                ->required(),
                        ]),

                    Section::make('Meta Information')
                        ->icon('heroicon-o-cog-6-tooth')
                        ->schema([
                            TagsInput::make('tags')
                                ->nullable(),
                            Checkbox::make('published')
                                ->default(false),
                            DatePicker::make('published_at')
                                ->nullable(),
                        ]),
                ])->columnSpan(1),
            ])
            ->columns(3);
    }
}

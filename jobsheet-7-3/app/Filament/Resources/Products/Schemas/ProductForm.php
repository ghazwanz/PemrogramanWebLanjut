<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Actions\Action;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    Step::make('Product Info')
                        ->description('Isi informasi dasar produk')
                        ->icon('heroicon-o-information-circle')
                        ->schema([
                            Group::make([
                                TextInput::make('name')
                                    ->required(),
                                TextInput::make('sku')
                                    ->required()
                                    ->unique(ignoreRecord: true),
                            ])->columns(2),
                            MarkdownEditor::make('description')
                                ->required()
                                ->columnSpanFull(),
                        ]),
                    Step::make('Product Price and Stock')
                        ->description('Isi harga dan jumlah stok')
                        ->icon('heroicon-o-currency-dollar')
                        ->schema([
                            TextInput::make('price')
                                ->numeric()
                                ->required()
                                ->minValue(1),
                            TextInput::make('stock')
                                ->numeric()
                                ->required()
                                ->minValue(0),
                        ]),
                    Step::make('Media and Status')
                        ->description('Upload gambar dan atur status')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            FileUpload::make('image')
                                ->disk('public')
                                ->directory('products'),
                            Checkbox::make('is_active')
                                ->default(true),
                            Checkbox::make('is_featured')
                                ->default(false),
                        ]),
                ])
                    ->columnSpanFull()
                    ->submitAction(
                        Action::make('save')
                            ->label('Save Product')
                            ->button()
                            ->color('primary')
                            ->submit('save')
                    ),
            ]);
    }
}

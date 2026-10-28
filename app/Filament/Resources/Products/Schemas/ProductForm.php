<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->label('Product Code')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                TextInput::make('name')
                    ->label('Product Name')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Description')
                    ->rows(4)
                    ->nullable(),

                TextInput::make('stock')
                    ->label('Stock')
                    ->numeric()
                    ->default(0)
                    ->required()
                    ->minValue(0),

                TextInput::make('price')
                    ->label('Price')
                    ->numeric()
                    ->prefix('Rp')
                    ->default(0)
                    ->required()
                    ->minValue(0),

                FileUpload::make('image')
                    ->label('Product Image')
                    ->image()
                    ->imageEditor()
                    ->directory('products')
                    ->nullable(),
            ]);
    }
}
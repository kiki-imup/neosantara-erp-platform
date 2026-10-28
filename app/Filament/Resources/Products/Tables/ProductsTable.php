<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),

                TextColumn::make('code')
                    ->label('Product Code')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Product Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->label('Description')
                    ->limit(50),

                TextColumn::make('stock')
                    ->label('Stock')
                    ->sortable(),

                TextColumn::make('price')
                    ->label('Price')
                    ->money('IDR')
                    ->sortable(),

                ImageColumn::make('image')
                    ->label('Product Image')
                    ->disk('public')
                    ->square(),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
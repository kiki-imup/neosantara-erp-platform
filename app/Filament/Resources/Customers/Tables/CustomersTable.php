<?php

namespace App\Filament\Resources\Customers\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CustomersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Pelanggan'),
                TextColumn::make('email')
                    ->searchable()
                    ->label('Email'),
                TextColumn::make('joined_date')
                    ->date()
                    ->sortable()
                    ->label('Tgl Bergabung'),
            ]);
    }
}
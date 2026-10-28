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
                    ->weight('bold')
                    ->icon('heroicon-m-user')
                    ->label('Pelanggan'),

                TextColumn::make('email')
                    ->searchable()
                    ->copyable()
                    ->icon('heroicon-m-envelope')
                    ->label('Email'),

                TextColumn::make('phone')
                    ->icon('heroicon-m-phone')
                    ->copyable()
                    ->label('Telepon'),

                TextColumn::make('address')
                    ->limit(30)
                    ->tooltip('Lihat alamat lengkap')
                    ->icon('heroicon-m-map-pin')
                    ->label('Alamat'),

                TextColumn::make('joined_date')
                    ->date('d M Y')
                    ->sortable()
                    ->icon('heroicon-m-calendar')
                    ->label('Bergabung'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Dibuat'),
            ]);
    }
}
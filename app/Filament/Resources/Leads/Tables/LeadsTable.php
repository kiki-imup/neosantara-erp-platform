<?php

namespace App\Filament\Resources\Leads\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Table;

class LeadsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('company_name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->icon('heroicon-m-building-office')
                    ->label('Perusahaan'),

                TextColumn::make('contact_person')
                    ->searchable()
                    ->icon('heroicon-m-user')
                    ->label('Kontak'),

                TextColumn::make('phone')
                    ->icon('heroicon-m-phone')
                    ->copyable()
                    ->label('Telepon'),

                TextColumn::make('email')
                    ->searchable()
                    ->copyable()
                    ->icon('heroicon-m-envelope')
                    ->label('Email'),

                BadgeColumn::make('status')
                    ->colors([
                        'primary' => 'Baru',
                        'warning' => 'Follow Up',
                        'success' => 'Berhasil',
                        'danger' => 'Gagal',
                    ])
                    ->label('Status'),

                TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Tanggal Masuk'),
            ]);
    }
}
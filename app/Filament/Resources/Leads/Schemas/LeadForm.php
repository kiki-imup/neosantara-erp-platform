<?php

namespace App\Filament\Resources\Leads\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class LeadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('company_name')
                    ->required()
                    ->label('Nama Perusahaan'),
                TextInput::make('contact_person')
                    ->required()
                    ->label('Nama Kontak'),
                TextInput::make('phone')
                    ->tel()
                    ->label('No. Telepon'),
                TextInput::make('email')
                    ->email()
                    ->label('Email'),
                Select::make('status')
                    ->options([
                        'Baru' => 'Baru',
                        'Follow Up' => 'Follow Up',
                        'Berhasil' => 'Berhasil',
                        'Gagal' => 'Gagal',
                    ])
                    ->required()
                    ->label('Status Prospek'),
            ]);
    }
}
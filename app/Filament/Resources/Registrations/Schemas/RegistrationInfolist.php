<?php

namespace App\Filament\Resources\Registrations\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RegistrationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('institution_name'),
                TextEntry::make('ped_name'),
                TextEntry::make('ped_contact'),
                TextEntry::make('captain_name'),
                TextEntry::make('captain_email'),
                TextEntry::make('captain_contact'),
                TextEntry::make('razorpay_order_id')
                    ->placeholder('-'),
                TextEntry::make('razorpay_payment_id')
                    ->placeholder('-'),
                TextEntry::make('payment_status'),
                TextEntry::make('amount')
                    ->numeric(),
                IconEntry::make('email_sent')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('event_id')
                    ->numeric()
                    ->placeholder('-'),
            ]);
    }
}

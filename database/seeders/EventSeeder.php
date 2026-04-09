<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        // Fees from NH Cup 2026 brochure (stored in paise: ₹ × 100)
        $events = [
            ['name' => 'Basketball (Men)',    'fee' => 100000],
            ['name' => 'Basketball (Women)',  'fee' => 100000],
            ['name' => 'Volleyball (Men)',    'fee' => 100000],
            ['name' => 'Volleyball (Women)',  'fee' => 100000],
            ['name' => 'Football (Men)',      'fee' => 100000],
            ['name' => 'Football (Women)',    'fee' => 100000],
            ['name' => 'Handball (Men)',      'fee' => 100000],
            ['name' => 'Badminton (Men)',     'fee' => 60000],
            ['name' => 'Badminton (Women)',   'fee' => 60000],
            ['name' => 'Tug of War (Men)',    'fee' => 60000],
            ['name' => 'Kabaddi (Men)',       'fee' => 100000],
        ];

        foreach ($events as $event) {
            Event::firstOrCreate(
                ['name' => $event['name']],
                ['fee'  => $event['fee'], 'is_active' => true]
            );
        }
    }
}
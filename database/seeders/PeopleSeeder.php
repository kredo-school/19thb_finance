<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    private $person;

    public function __construct(People $person)
    {
        $this->person = $person;
    }

    public function run(): void
    {
        $people = [
            [
                'name' => 'Money Juuco',
                'user_id' => 1,
                'color_hex' => 'FE6D73',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Money Juo',
                'user_id' => 1,
                'color_hex' => '227C9D',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Son1',
                'user_id' => 1,
                'color_hex' => '0FA3B1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Son2',
                'user_id' => 1,
                'color_hex' => 'F7A072',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Daughter',
                'user_id' => 1,
                'color_hex' => 'FFD70A',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        $this->person->insert($people);
    }
}

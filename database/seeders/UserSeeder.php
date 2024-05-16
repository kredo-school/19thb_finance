<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@mail.com',
                'password' => Hash::make('admin12345'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'John Smith',
                'email' => 'john@mail.com',
                'password' => Hash::make('123456789'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mary Smith',
                'email' => 'mary@mail.com',
                'password' => Hash::make('123456789'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        $this->user->insert($users);
    }
}

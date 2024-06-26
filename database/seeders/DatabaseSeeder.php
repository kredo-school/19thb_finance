<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Report::factory(10)->create();
        \App\Models\Wishlist::factory(2)->create();

        $this->call([
            UserSeeder::class,
            ParentCategorySeeder::class,
            ChildCategorySeeder::class,
            PeopleSeeder::class,
            TransactionSeeder::class,
            ItemListSeeder::class
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\ParentCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParentCategorySeeder extends Seeder
{
    private $parent_category;

    public function __construct(ParentCategory $parent_category)
    {
        $this->parent_category = $parent_category;
    }

    public function run(): void
    {
        $parent_categories = [
            [
                'name' => 'Meal',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => 'FF3F34',
                'icon_path' => 'meal',
                'is_default' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Daily',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => '48DBFB',
                'icon_path' => 'daily',
                'is_default' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Beauty',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => 'FD79A8',
                'icon_path' => 'beauty',
                'is_default' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hang Out',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => 'FFD70A',
                'icon_path' => 'hang_out',
                'is_default' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rent',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => '2FCC71',
                'icon_path' => 'rent',
                'is_default' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Utilities',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => 'FF7F50',
                'icon_path' => 'utilities',
                'is_default' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Transportation',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => '218C74',
                'icon_path' => 'transportation',
                'is_default' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Data',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => '474787',
                'icon_path' => 'data',
                'is_default' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Medical',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => '7F8C8D',
                'icon_path' => 'medical',
                'is_default' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Salary',
                'type' => 'income',
                'user_id' => 1,
                'color_hex' => '1E3799',
                'icon_path' => 'income1',
                'is_default' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Other',
                'type' => 'income',
                'user_id' => 1,
                'color_hex' => 'C0392B',
                'icon_path' => 'income2',
                'is_default' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Close',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => '6C5CE7',
                'icon_path' => 'close',
                'is_default' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hobby',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => 'B8E894',
                'icon_path' => 'hobby',
                'is_default' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Education',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => '0652DD',
                'icon_path' => 'education',
                'is_default' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Investment',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => 'C0392B',
                'icon_path' => 'investment',
                'is_default' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Other',
                'type' => 'expense',
                'user_id' => 1,
                'color_hex' => 'C0392B',
                'icon_path' => 'expense1',
                'is_default' => '0',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        $this->parent_category->insert($parent_categories);
    }
}

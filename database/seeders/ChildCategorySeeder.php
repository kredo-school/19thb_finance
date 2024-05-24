<?php

namespace Database\Seeders;

use App\Models\ChildCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChildCategorySeeder extends Seeder
{
    private $child_category;

    public function __construct(ChildCategory $child_category)
    {
        $this->child_category = $child_category;
    }

    public function run(): void
    {
        $child_categories = [
            [
                'name' => 'Breakfast',
                'is_default' => '1',
                'parent_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Lunch',
                'is_default' => '1',
                'parent_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dinner',
                'is_default' => '1',
                'parent_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Groceries',
                'is_default' => '1',
                'parent_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Toiletries',
                'is_default' => '1',
                'parent_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Household Supplies',
                'is_default' => '1',
                'parent_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Skincare',
                'is_default' => '1',
                'parent_category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Makeup',
                'is_default' => '1',
                'parent_category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Haircare',
                'is_default' => '1',
                'parent_category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Movies',
                'is_default' => '1',
                'parent_category_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dining Out',
                'is_default' => '1',
                'parent_category_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Events',
                'is_default' => '1',
                'parent_category_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'House Rent',
                'is_default' => '1',
                'parent_category_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Electricity',
                'is_default' => '1',
                'parent_category_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Water',
                'is_default' => '1',
                'parent_category_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Gas',
                'is_default' => '1',
                'parent_category_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fuel',
                'is_default' => '1',
                'parent_category_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Public Transit',
                'is_default' => '1',
                'parent_category_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vehicle Maintenance',
                'is_default' => '1',
                'parent_category_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Internet',
                'is_default' => '1',
                'parent_category_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mobile Data',
                'is_default' => '1',
                'parent_category_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cable/Satellite TV',
                'is_default' => '1',
                'parent_category_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Doctor's Visits",
                'is_default' => '1',
                'parent_category_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Medications",
                'is_default' => '1',
                'parent_category_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Medical Equipment",
                'is_default' => '1',
                'parent_category_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Income",
                'is_default' => '1',
                'parent_category_id' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        $this->child_category->insert($child_categories);
    }
}

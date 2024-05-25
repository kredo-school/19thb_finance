<?php

namespace Database\Seeders;

use App\Models\ItemList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemListSeeder extends Seeder
{
    private $item_list;

    public function __construct(ItemList $item_list)
    {
        $this->item_list = $item_list;
    }

    public function run(): void
    {
        $item_lists = [
            'name' => 'Shopping List',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ];
        $this->item_list->insert($item_lists);
    }
}

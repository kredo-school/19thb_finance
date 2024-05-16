<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    private $transaction;

    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    public function run(): void
    {
        $childCategoryIds = DB::table('child_categories')->pluck('id');
        $transactions = [];

        for ($i = 0; $i < 10; $i++) {
            $randomDateTime = Carbon::now()->subDays(rand(1, 30))->subHours(rand(1, 24))->subMinutes(rand(1, 60));
            $randomAmount = rand(1, 1000);
            $randomCategoryId = $childCategoryIds->random();
            
            $transactions[] = [
                'transaction_name' => 'Transaction ' . ($i + 1),
                'datetime' => $randomDateTime,
                'amount' => $randomAmount,
                'description' => 'Transaction ' . ($i + 1) . ' description',
                'transaction_type' => 'expense',
                'user_id' => 1,
                'child_category_id' => $randomCategoryId,
                'person_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        $this->transaction->insert($transactions);
    }
}

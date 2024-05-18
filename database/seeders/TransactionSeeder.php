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
        $childCategoryIds = DB::table('child_categories')->whereNotIn('id', [26])->pluck('id');
        $peopleIds = DB::table('people')->pluck('id');
        $transactions = [];

        // Expenseトランザクションを生成
        for ($i = 0; $i < 30; $i++) {
            $randomDateTime = Carbon::now()->subDays(rand(1, 365))->subHours(rand(1, 24))->subMinutes(rand(1, 60));
            $randomAmount = rand(1, 10000);
            $randomCategoryId = $childCategoryIds->random();
            $randomPeopleId = $peopleIds->random();

            $transactions[] = [
                'transaction_name' => 'Expense Transaction ' . ($i + 1),
                'datetime' => $randomDateTime,
                'amount' => $randomAmount,
                'description' => 'Expense Transaction ' . ($i + 1) . ' description',
                'transaction_type' => 'expense',
                'user_id' => 1,
                'child_category_id' => $randomCategoryId,
                'person_id' => $randomPeopleId,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        for ($i = 0; $i < 10; $i++) {
            $randomDateTime = Carbon::now()->subDays(rand(1, 30))->subHours(rand(1, 24))->subMinutes(rand(1, 60));
            $randomAmount = rand(1, 10000);
            $randomCategoryId = $childCategoryIds->random();
            $randomPeopleId = $peopleIds->random();

            $transactions[] = [
                'transaction_name' => 'Expense Transaction ' . ($i + 1),
                'datetime' => $randomDateTime,
                'amount' => $randomAmount,
                'description' => 'Expense Transaction ' . ($i + 1) . ' description',
                'transaction_type' => 'expense',
                'user_id' => 1,
                'child_category_id' => $randomCategoryId,
                'person_id' => $randomPeopleId,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Incomeトランザクションを生成
        $currentDate = Carbon::now()->subYear()->startOfMonth(); // １年前の今月の最初の日付を設定
        $endDate = Carbon::now()->endOfMonth(); // 今月の最後の日付を取得
        while ($currentDate <= $endDate) {
            $transactions[] = [
                'transaction_name' => 'Income Transaction',
                'datetime' => $currentDate->copy()->addDays(rand(0, $currentDate->daysInMonth - 1)),
                'amount' => 10000,
                'description' => 'Income Transaction description',
                'transaction_type' => 'income',
                'user_id' => 1,
                'child_category_id' => 26,
                'person_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $currentDate->addMonth(); // 次の月に移動
        }

        
        $this->transaction->insert($transactions);
    }
}

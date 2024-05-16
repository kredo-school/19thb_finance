<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use App\Models\ParentCategory;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnalysisController extends Controller
{
    private $transaction;
    private $child_category;
    private $parent_category;
    private $user;

    public function __construct(Transaction $transaction, ChildCategory $child_category, ParentCategory $parent_category, User $user)
    {
        $this->transaction = $transaction;
        $this->child_category = $child_category;
        $this->parent_category = $parent_category;
        $this->user = $user;
    }

    private function totalExpenseAmount()
    {
        $user_id = Auth::user()->id;

        $totalExpenseAmount = $this->transaction->where('user_id', $user_id)
                                        ->where('transaction_type', 'expense')
                                        ->sum('amount');

        return $totalExpenseAmount;
    }

    private function totalIncomeAmount()
    {
        $user_id = Auth::user()->id;

        $totalIncomeAmount = $this->transaction->where('user_id', $user_id)
                                        ->where('transaction_type', 'income')
                                        ->sum('amount');

        return $totalIncomeAmount;
    }

    private function expenseChartData()
    {
        $transactions = $this->transaction->where('user_id', Auth::user()->id)->get();

        $expenseData = $transactions->groupBy(function ($transaction) {
                                        return $transaction->childCategory->parent_category_id;
                                    })->map(function ($group) {
                                        return $group->sum('amount');
                                    })->sortByDesc(function ($amount) {
                                        return $amount;
                                    });

        $expenseLabels = $expenseData->keys()
                                    ->map(function ($parent_category_id) {
                                        $parentCategoryName = $this->parent_category->find($parent_category_id)->name;
                                        return $parentCategoryName;
                                    });

        $expenseColors = $expenseData->keys()
                                    ->map(function ($parent_category_id) {
                                        $parentCategoryColor = '#' . $this->parent_category->find($parent_category_id)->color_hex;
                                        return $parentCategoryColor;
                                    });
        
        $expenseAmounts = $expenseData->values();

        return [
            'expenseLabels' => $expenseLabels,
            'expenseColors' => $expenseColors,
            'expenseAmounts' => $expenseAmounts,
        ];
    }

    private function weeklyChartData() {
        $startDate = now()->subDays(6)->startOfDay();
        $endDate = now()->endOfDay();
        $transactions = $this->transaction->where('user_id', Auth::user()->id)
                                        ->where('transaction_type', 'expense')
                                        ->whereBetween('datetime', [$startDate, $endDate])
                                        ->get();

        $transactions->transform(function ($transaction) {
            $transaction->datetime = Carbon::parse($transaction->datetime);
            return $transaction;
        });

        $dateRange = collect(Carbon::parse($startDate)->daysUntil($endDate));

        $dailyExpenses = $dateRange->mapWithKeys(function ($date) use ($transactions) {
            $formattedDate = $date->format('D'); 
            $dailyTotal = $transactions->filter(function ($transaction) use ($date) {
                return $transaction->datetime->isSameDay($date);
            })->sum('amount'); 
        
            return [$formattedDate => $dailyTotal];
        })->toArray();

        $weeklyLabels = array_keys($dailyExpenses); 
        $weeklyAmounts = array_values($dailyExpenses); 

        $totalWeeklyExpense = $this->transaction->where('user_id', Auth::user()->id)
                                                ->where('transaction_type', 'expense')
                                                ->whereBetween('datetime', [$startDate, $endDate])
                                                ->sum('amount');

        return [
            'weeklyLabels' => $weeklyLabels,
            'weeklyAmounts' => $weeklyAmounts,
            'totalWeeklyExpense' => $totalWeeklyExpense,
        ];
    }

    private function parentCategories() {

        $transactions = $this->transaction->with('childCategory.parentCategory')
                        ->where('user_id', Auth::user()->id)
                        ->where('transaction_type', 'expense')
                        ->get();

        $parentCategories = $transactions
                            ->filter(function ($transaction) {
                                return $transaction->childCategory && $transaction->childCategory->parentCategory;
                            })
                            ->groupBy(function ($transaction) {
                                return $transaction->childCategory->parentCategory->id;
                            })
                            ->map(function ($group) {
                                $totalAmount = $group->sum('amount');
                                $totalExpense = $this->totalExpenseAmount();
                                $parentCategory = $group->first()->childCategory->parentCategory;

                                $start = Carbon::now()->subYear()->startOfMonth();
                                $end = Carbon::now()->endOfMonth();
                                $monthlyData = [];

                                while ($end->gte($start)) {
                                    $monthlyData[$end->format('m')] = [
                                        'label' => $end->format('m'),
                                        'total_amount' => $group->filter(function ($transaction) use ($start, $end) {
                                            return Carbon::parse($transaction->datetime)->between($start, $end);
                                        })->sum('amount')
                                    ];
                                    $end->subMonth();
                                }

                                $monthlyLabels = [];
                                $monthlyAmounts = [];
                                foreach ($monthlyData as $month => $data) {
                                    $monthlyLabels[] = $data['label'];
                                    $monthlyAmounts[] = $group->filter(function ($transaction) use ($data) {
                                        return Carbon::parse($transaction->datetime)->format('m') === $data['label'];
                                    })->sum('amount');
                                }
                                $monthlyLabels = array_reverse($monthlyLabels);
                                $monthlyAmounts = array_reverse($monthlyAmounts);
                                
                                $childCategories = $group->groupBy(function ($transaction) {
                                    return $transaction->childCategory->id;
                                })->map(function ($childGroup) use ($monthlyData, $totalAmount) {
                                    $monthlyLabels = [];
                                    $monthlyAmounts = [];
                                    foreach ($monthlyData as $month => $data) {
                                        $monthlyLabels[] = $data['label'];
                                        $monthlyAmounts[] = $childGroup->filter(function ($transaction) use ($data) {
                                            return Carbon::parse($transaction->datetime)->format('m') === $data['label'];
                                        })->sum('amount');
                                    }
                                
                                    $totalChildAmount = $childGroup->sum('amount');
                                    $monthlyLabels = array_reverse($monthlyLabels);
                                    $monthlyAmounts = array_reverse($monthlyAmounts);

                                
                                    return [
                                        'id' => $childGroup->first()->childCategory->id,
                                        'name' => $childGroup->first()->childCategory->name,
                                        'total_amount' => $totalChildAmount,
                                        'percentage_of_total' => ($totalChildAmount / $totalAmount) * 100,
                                        'count' => $childGroup->count(),
                                        'monthly_labels' => $monthlyLabels,
                                        'monthly_amounts' => $monthlyAmounts,
                                    ];
                                })->sortByDesc('total_amount');

                                $childLabels = $childCategories->pluck('name')->toArray();
                                $childAmounts = $childCategories->pluck('total_amount')->toArray();

                                return [
                                    'id' => $parentCategory->id,
                                    'name' => $parentCategory->name,
                                    'icon_path' => $parentCategory->icon_path,
                                    'color_hex' => $parentCategory->color_hex,
                                    'total_amount' => $totalAmount,
                                    'percentage_of_total' => ($totalAmount / $totalExpense) * 100,
                                    'count' => count($group),
                                    'average_amount' => $totalAmount / count($group),
                                    'childCategories' => $childCategories,
                                    'childLabels' => $childLabels,
                                    'childAmounts' => $childAmounts,
                                    'monthly_labels' => $monthlyLabels,
                                    'monthly_amounts' => $monthlyAmounts,
                                ];
                            })
                            ->filter(function ($category) {
                                return $category['total_amount'] > 0;
                            })
                            ->values()
                            ->sortByDesc('total_amount');

        return $parentCategories;
    }

    public function summary()
    {
        $totalExpenseAmount = $this->totalExpenseAmount();
        $totalIncomeAmount = $this->totalIncomeAmount();

        $expenseChartData = $this->expenseChartData();

        $weeklyChartData = $this->weeklyChartData();

        return view('analysis.summary')
                ->with('totalExpenseAmount', $totalExpenseAmount)
                ->with('totalIncomeAmount', $totalIncomeAmount)
                ->with('expenseChartData', $expenseChartData)
                ->with('weeklyChartData', $weeklyChartData);
    }

    public function category() {
        $totalExpenseAmount = $this->totalExpenseAmount();

        $expenseChartData = $this->expenseChartData();

        $parentCategories = $this->parentCategories();           

        return view('analysis.category.index')
                ->with('totalExpenseAmount', $totalExpenseAmount)
                ->with('expenseChartData', $expenseChartData)
                ->with('parentCategories', $parentCategories);
    }

    public function parent($parent_category_id) {
        $totalExpenseAmount = $this->totalExpenseAmount();

        $expenseChartData = $this->expenseChartData();

        $parentCategories = $this->parentCategories();

        return view('analysis.category.parent')
                ->with('totalExpenseAmount', $totalExpenseAmount)
                ->with('expenseChartData', $expenseChartData)
                ->with('parentCategories', $parentCategories)
                ->with('parent_category_id', $parent_category_id);
    }

    public function child($parent_category_id, $child_category_id) {
        $totalExpenseAmount = $this->totalExpenseAmount();
        
        $expenseChartData = $this->expenseChartData();

        $parentCategories = $this->parentCategories();

        return view('analysis.category.child')
                ->with('totalExpenseAmount', $totalExpenseAmount)
                ->with('expenseChartData', $expenseChartData)
                ->with('parentCategories', $parentCategories)
                ->with('parent_category_id', $parent_category_id)
                ->with('child_category_id', $child_category_id);
    }

    public function cashflow() {
        

        return view('analysis.cashflow');
    }

    public function people() {
        return view('analysis.people');
    }
}

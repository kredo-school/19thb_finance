<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $transaction;
    private $user;

    public function __construct(Transaction $transaction, User $user)
    {
        $this->transaction = $transaction;
        $this->user = $user;
    }

    public function welcome() {
        return view('welcome');
    }

    public function learnMore() {
        return view('learn-more');
    }

    public function index(Request $request)
    {
        $date = $request->input('date', now()->format('Y-m'));

        $carbonDate = Carbon::parse($date);

        $startOfMonth = $carbonDate->startOfMonth()->format('Y-m-d H:i:s');
        $endOfMonth = $carbonDate->endOfMonth()->format('Y-m-d H:i:s');

        $transactions = $this->transaction->where('user_id', Auth::user()->id)
        ->whereBetween('datetime', [$startOfMonth, $endOfMonth])
        ->orderBy('datetime', 'desc')
        ->get();

        $groupedTransactions = $transactions->groupBy(function($transaction) {
            return Carbon::parse($transaction->datetime)->format('Y-m-d');
        });

        $calendar = new CalendarView($date);

        $user = $this->user->findOrFail(Auth::user()->id);

        return view('calendars.home', [
            'calendar' => $calendar,
            'groupedTransactions' => $groupedTransactions,
            'user' => $user,
        ]);
    }
}

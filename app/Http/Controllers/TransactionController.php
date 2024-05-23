<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class TransactionController extends Controller
{
    private $transaction;
    private $user;

    public function __construct(Transaction $transaction, User $user) {
        $this->transaction = $transaction;
        $this->user = $user;
    }

    
    public function new(Request $request) {
        $user = $this->user->findOrFail(Auth::user()->id);
        $today = now()->format('Y-m-d');

        return view('entries.transactions.new')
                ->with('user', $user)
                ->with('today', $today);
    }
    
    public function store(Request $request) {
        
        $this->transaction->datetime = $request->datetime." ".now()->format('h:i:s');
        $this->transaction->amount = $request->amount;
        $this->transaction->transaction_type = $request->transaction_type;
        $this->transaction->user_id = Auth::user()->id;

        $this->transaction->child_category_id = $request->child_category_id;
        $this->transaction->person_id = $request->person_id;

        $this->transaction->save();

        return redirect()->route('calendars.home');
    }

    public function edit(Request $request) {
        $user = $this->user->findOrFail(Auth::user()->id);
        $today = now()->format('Y-m-d');

        return view('entries.transactions.edit')
                ->with('user', $user)
                ->with('today', $today);
    }


}

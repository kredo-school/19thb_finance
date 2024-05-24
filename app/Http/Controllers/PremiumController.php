<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use App\Models\Premium;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PremiumController extends Controller
{
    //protected $premium

    public function update(Request $request)
    {
        DB::beginTransaction(); //connect to DB
        
        // Validate the incoming request data (optional)　下の全てのデータを検証して、適切かどうかみてる
        $request->validate([
            'subscription'      => 'required|string|max:255',
            'cardholder_name'   => 'required|string|max:255',
            'card_number'       => ['required', 'string', 'max:255',Rule::unique('payments'),],
                                                                                // table name from Model
            'expire_month'      => 'required|string|max:255',
            'expire_year'       => 'required|string|max:255',
            'security_code'     => 'required|string|max:255'
        ]);

        try {
            $payment = User::findOrFail(Auth::user()->id);
            // $payment = new Premium(); // Instance
            $payment->subscription   = $request->input('subscription');
            $payment->cardholder_name   = $request->input('cardholder_name');
            $payment->card_number      = $request->input('card_number');
            $payment->expire_month      = $request->input('expire_month');
            $payment->expire_year       = $request->input('expire_year');
            $payment->security_code     = $request->input('security_code');
            
            //Below  fixed phrase
            // Save the changes
            $payment->save();

            // Commit the transaction
            DB::commit();

            // Redirect back with a success message
            Log::info('Payment info updated successfully.');
            return redirect()->back()->with('success', 'Payment info updated successfully.'); //(もしsuccessしたら,この文をコンソールに出す)
        } catch (\Exception $e) {
            // Rollback the transaction
            // DB::rollback();
            
            // Log the error
            Log::error('Error updating Payment info: ' . $e->getMessage());
            
            // Redirect back with an error message
            return back()->withInput()->withErrors(['error' => 'Error updating Payment info. Please try again.']);
        }
    }

    public function show() {
        // $user = $this->user->findOrFail(Auth::user()->id);
        return view('premium');
              //  ->with('user', $user);
    }
}

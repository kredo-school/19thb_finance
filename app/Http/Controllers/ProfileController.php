<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    private $user;

    // DB::beginTransaction(); // =connect to DB
    // databaseのUserテーブルと繋げますー
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function show() {
        $user = $this->user->findOrFail(Auth::user()->id);
        // Auth(loginしてる人)のidに紐づけますよー
        return view('profile.show') //('profileフォルダの.show.bladeファイル')
                ->with('user', $user);
            // ->withでbladeの中のuserに$useの情報を入れられるようになるよ
    }

    public function update(Request $request)
    {
        // DB::beginTransaction(); //connect to DB
        
        // Validate the incoming request data (optional)　下の全てのデータを検証して、適切かどうかみてる
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|string|max:255',
            'icon_color'  => 'required|string|max:255'
        ]);

        try {
            // $user_update = new User(); // Instance
            $user_update = $this->user->findOrFail(Auth::user()->id);
            $user_update ->name   = $request->input('name');
            $user_update ->email   = $request->input('email');
            $user_update ->icon_color     = $request->input('icon_color');
            
            //Below  fixed phrase
            // Save the changes
            $user_update->save();

            // Commit the transaction
            DB::commit();

            // Redirect back with a success message
            Log::info('User info updated successfully.');
            return redirect()->back()->with('success', 'User info updated successfully.'); //(もしsuccessしたら,この文をコンソールに出す)
        } catch (\Exception $e) {
            // Rollback the transaction
            // DB::rollback();
            
            // Log the error
            Log::error('Error updating User info: ' . $e->getMessage());
            
            // Redirect back with an error message
            return back()->withInput()->withErrors(['error' => 'Error updating User info. Please try again.']);
        }
    }
}
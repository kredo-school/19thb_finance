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


    public function edit() {
        $user = $this->user->findOrFail(Auth::user()->id);
        return view('profile.edit')
                ->with('user', $user);
    }

    public function update(Request $request)
    {
        DB::beginTransaction(); //connect to DB
        
        // Validate the incoming request data (optional)　下の全てのデータを検証して、適切かどうかみてる
        $request->validate([
            'name'       => 'required|string|max:50',
            'email'      => 'required|string|max:255',
            'icon_color_hex'  => 'required|string|max:7'
        ]);



        try {
            $user_update = User::findOrFail(Auth::user()->id);
            // $user_update = new User(); // Instance
            $user_update ->name   = $request->input('name');
            $user_update ->email   = $request->input('email');
            $user_update ->icon_color_hex     = $request->input('icon_color_hex');
            
            // dd($user_update);　$（変数）の->(配列)を見たい時に使う

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

    // public function update(Request $request) {
    //     $request->validate([
    //         'name' => 'required|min:1|max:50'
    //     ]);

    //     $user = $this->user->findOrFail(Auth::user()->id);
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->icon_color_hex = $request->icon_color_hex;

    //     $user->save();
        
    //     return redirect()->route('profile.show');
    // }

}
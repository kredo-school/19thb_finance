<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function update(Request $request)
    {
        DB::beginTransaction();

                $request->validate([
                    'name'             => 'required|string|max:255',
                    'icon_color'       => 'required|string|max:255',
                    'new-password'     => 'required|string|max:255',
                    'confirm-password' => 'required|string|max:255'
                    // emailのidは追加必要？？
                ]);
        
                try {
                    $people = new People(); // Instance
                    $people->name         = $request->input('name');
                    $people->icon_color   = $request->input('icon_color');
                    $people->new-password = $request->input('new-password');
                    $people->confirm-password = $request->input('confirm-password');
                    
                    //Below  fixed phrase
                    // Save the changes
                    $people->save();
        
                    // Commit the transaction
                    DB::commit();
        
                    // Redirect back with a success message
                    Log::info('Profile info updated successfully.');
                    return redirect()->back()->with('success', 'Profile info updated successfully.'); //(もしsuccessしたら,この文をコンソールに出す)
                } catch (\Exception $e) {
                    // Rollback the transaction
                    // DB::rollback();
                    
                    // Log the error
                    Log::error('Error updating Profile info: ' . $e->getMessage());
                    
                    // Redirect back with an error message
                    return back()->withInput()->withErrors(['error' => 'Error updating Profile info. Please try again.']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
}
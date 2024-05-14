<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistsController extends Controller
{
    // private $wish;

    // public function __construct(Wish $wish)
    // {
        
    // }

    // new
    public function new (Request $request) {
        return view('calendars.wishlists.new');
    }

    // show
    public function show (Request $request) {
        return view('calendars.wishlists.show');
    }

    // edit
    public function edit (Request $request) {
        return view('calendars.wishlists.edit');
    }

}

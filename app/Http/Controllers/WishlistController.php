<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    // private $wish;

    // public function __construct(Wishlist $wish) {
    //     $this->wish = $wish;
    // }

    // new
    public function create() {
        return view('calendars.wishlists.new');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'max:30',
            'budget' => 'integer|max:20',
        ]);

        $validated['user_id'] = auth()->id();
        $wishlist = Wishlist::create($validated);
        
        // $this->wish->user_id = Auth::user()->id;
        // $this->wish->title = $request->title;
        // $this->wish->budget = $request->budget;
        // $this->wish->save();

        return redirect()->route('calendars.wishlists.show');
    }

    // show
    public function index() {
        $wishlists = Wishlist::where('user_id', auth()->id())->get();
        return view('calendars.wishlists.show', compact('wishlists'));
    }
    // public function show(Wishlist $wishlist) {
    //     return view('calendars.wishlists.show', compact('wishlist'));
    // }

    // edit
    public function edit(Wishlist $wishlist) {
        return view('calendars.wishlists.edit');
    }

    public function update(Request $request, Wishlist $wishlist) {
        $validated = $request->validate([
            'title' => 'max:30',
            'budget' => 'integer|max:20',
        ]);

        $validated['user_id'] = auth()->id();
        
    }
}

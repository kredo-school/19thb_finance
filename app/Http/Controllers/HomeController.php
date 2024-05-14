<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
// use App\Models\Post;
// use App\Models\user;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    private $post;
    private $user;

    // public function __construct(Post $post, User $user) {
    //     $this->post = $post;
    //     $this->user = $user;
    // }

    public function index(Request $request) {

        $calendar = new CalendarView(time());
        return view('calendars.home', [
			"calendar" => $calendar
		]);
        
    }
}

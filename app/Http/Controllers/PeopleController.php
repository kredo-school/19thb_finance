<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeopleController extends Controller
{
    private $people;
    private $user;

    public function __construct(People $people, User $user)
    {
        $this->people = $people;
        $this->user = $user;
    }

    public function show() {
        $user = $this->user->findOrFail(Auth::user()->id);

        return view('profile.people.show')
                ->with('user', $user);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:1|max:50',
            'color_hex' => 'required'
        ]);

        $this->people->name = $request->name;
        $this->people->color_hex = $request->color_hex;
        $this->people->user_id = Auth::user()->id;
        $this->people->save();

        return redirect()->back();
    }

    public function getPeopleById($id)
    {
        $people = $this->people->findOrFail($id);
        return response()->json($people);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|min:1|max:50',
            'color_hex' => 'required'
        ]);

        $people = $this->people->findOrFail($id);

        $people->name = $request->name;
        $people->color_hex = $request->color_hex;
        $people->user_id = Auth::user()->id;
        $people->save();

        return redirect()->back();
    }

    public function destroy($id) {
        $this->people->destroy($id);

        return redirect()->back();
    }
    
}

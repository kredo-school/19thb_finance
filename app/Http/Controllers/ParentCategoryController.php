<?php

namespace App\Http\Controllers;

use App\Models\ParentCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParentCategoryController extends Controller
{
    private $parent_category;
    private $user;

    public function __construct(ParentCategory $parent_category, User $user)
    {
        $this->parent_category = $parent_category;
        $this->user = $user;
    }

    public function show() {
        $user = $this->user->findOrFail(Auth::user()->id);

        return view('category.show')
                ->with('user', $user);
    }

    public function create() {
        $user = $this->user->findOrFail(Auth::user()->id);

        return view('category.parent.create')
                ->with('user', $user);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:1|max:50',
            'type' => 'required',
            'color_hex' => 'required',
            'icon_path' => 'required'
        ]);

        $this->parent_category->name = $request->name;
        $this->parent_category->type = $request->type;
        $this->parent_category->color_hex = $request->color_hex;
        $this->parent_category->icon_path = $request->icon_path;
        $this->parent_category->user_id = Auth::user()->id;

        $this->parent_category->save();

        return redirect()->route('category.show');
    }

    public function edit($id) {
        $parent_category = $this->parent_category->findOrFail($id);
        $user = $this->user->findOrFail(Auth::user()->id);

        return view('category.parent.edit')
                ->with('parent_category', $parent_category)
                ->with('user', $user);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|min:1|max:50',
            'type' => 'required',
            'color_hex' => 'required',
            'icon_path' => 'required'
        ]);

        $parent_category = $this->parent_category->findOrFail($id);
        $parent_category->name = $request->name;
        $parent_category->type = $request->type;
        $parent_category->color_hex = $request->color_hex;
        $parent_category->icon_path = $request->icon_path;
        $parent_category->is_default = 0;

        $parent_category->save();

        return redirect()->route('category.show');
    }

    public function destroy($id) {
        $this->parent_category->destroy($id);

        return redirect()->route('category.show');
    }
}

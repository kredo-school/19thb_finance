<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use App\Models\ParentCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChildCategoryController extends Controller
{
    private $parent_category;
    private $child_category;
    private $user;

    public function __construct(ParentCategory $parent_category, ChildCategory $child_category, User $user)
    {
        $this->parent_category = $parent_category;
        $this->child_category = $child_category;
        $this->user = $user;
    }

    public function show($id) {
        $parent_category = $this->parent_category->findOrFail($id);
        $user = $this->user->findOrFail(Auth::user()->id);

        return view('category.child.show')
                ->with('parent_category', $parent_category)
                ->with('user', $user);
    }

    public function create($id) {
        $parent_category = $this->parent_category->findOrFail($id);
        $user = $this->user->findOrFail(Auth::user()->id);

        return view('category.child.create')
                ->with('parent_category', $parent_category)
                ->with('user', $user);
    }

    public function store(Request $request, $parent_category_id) {
        $request->validate([
            'name' => 'required|min:1|max:50'
        ]);

        $this->child_category->name = $request->name;
        $this->child_category->parent_category_id = $parent_category_id;

        $this->child_category->save();

        return redirect()->route('category.child.show', $parent_category_id);
    }

    public function edit($parent_category_id, $child_category_id) {
        $parent_category = $this->parent_category->findOrFail($parent_category_id);
        $child_category = $this->child_category->findOrFail($child_category_id);
        $user = $this->user->findOrFail(Auth::user()->id);

        return view('category.child.edit')
                ->with('parent_category', $parent_category)
                ->with('child_category', $child_category)
                ->with('user', $user);
    }

    public function update(Request $request, $parent_category_id, $child_category_id) {
        $request->validate([
            'name' => 'required|min:1|max:50'
        ]);

        $child_category = $this->child_category->findOrFail($child_category_id);
        $child_category->name = $request->name;
        $child_category->parent_category_id = $parent_category_id;

        $child_category->save();

        return redirect()->route('category.child.show', $parent_category_id);
    }

    public function destroy($parent_category_id, $child_category_id) {
        $this->child_category->destroy($child_category_id);

        return redirect()->route('category.child.show', $parent_category_id);
    }
}

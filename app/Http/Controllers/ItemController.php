<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    private $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:1|max:255',
        ]);

        $this->item->name = $request->name;
        $this->item->is_checked = 0;
        $this->item->item_list_id = $request->item_list_id;
        $this->item->save();

        return redirect()->back();
    }

    public function updateChecked(Request $request, $id)
    {
        $item = $this->item->findOrFail($id);
        $item->is_checked = $request->is_checked;
        $item->save();

        return response()->json(['success' => true]);
    }

    public function destroy($id) {
        $this->item->destroy($id);

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function create() {
        return view('contacts.inquiry');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'subject' => 'required|max:30',
            'details' => 'required',
        ]);

        $report = Report::create($validated);
        // $this->report->user_id = Auth::user()->id;
        return back()->with('message', 'Thank you for your inquiry!');
    }
}

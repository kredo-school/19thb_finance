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
            'name' => 'required|max:30',
            'email' => 'required|max:30',
            'subject' => 'required|max:30',
            'details' => 'required|max:600',
        ]);

        $validated['user_id'] = auth()->id();

        $report = Report::create($validated);
        return back()->with('message', 'Thank you for your inquiry!');
    }

    public function index() {
        // $reports = Report::all();
        $reports = Report::paginate(4);
        return view('contacts.index', compact('reports'));
    }

    public function show(Report $report) {
        return view('contacts.show', compact('report'));
    }

    public function edit(Report $report) {
        return view('contacts.edit', compact('report'));
    }

    public function update(Request $request, Report $report) {
        $validated = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|max:30',
            'subject' => 'required|max:30',
            'details' => 'required|max:600',
        ]);

        $validated['user_id'] = auth()->id();

        $report->update($validated);
        return back()->with('message', 'Updated');
    }
}

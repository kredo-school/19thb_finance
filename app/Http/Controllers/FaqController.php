<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function create() {
        return view('contacts.faq');
    }
}

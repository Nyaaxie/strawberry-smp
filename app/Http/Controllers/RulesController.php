<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;

class RulesController
{
      public function index()
    {
        $rules = Rule::orderBy('order')->get();
        return view('rules.index', compact('rules'));
    }
    
}

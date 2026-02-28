<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reminder;

class RemindersController 
{
      public function index()
    {
        $reminders = Reminder::orderBy ('order')->get   ();
        return view('reminders.index', compact('reminders'));
    }
    
}


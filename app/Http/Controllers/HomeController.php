<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContent; 

class HomeController
{
      public function index()
    {
    $content = SiteContent::pluck('value', 'key');
    return view('home.index', compact('content'));
    }
    
}

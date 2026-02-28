<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteContentController
{
      public function index()
    {
        return view('site-content.index');
    }
    
}

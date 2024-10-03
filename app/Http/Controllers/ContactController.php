<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
   
    public function index()
    {
        return view('contact'); // This should match the name of your Blade view file
    }
    
}

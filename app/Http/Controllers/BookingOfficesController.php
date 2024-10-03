<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingOfficesController extends Controller
{
    public function index()
    {
        return view('booking-offices');
    }
}

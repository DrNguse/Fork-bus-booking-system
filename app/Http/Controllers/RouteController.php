<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        // You can fetch the routes from the database if you have them stored, 
        // or just pass some static data for now.

        $routes = [
            ['name' => 'Route 1', 'details' => 'Details for route 1'],
            ['name' => 'Route 2', 'details' => 'Details for route 2'],
            // Add more routes as needed
        ];

        return view('routes.index', compact('routes'));
    }
}

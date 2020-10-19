<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{


    public function index(Request $request)
    {
        $data = [
            'fname' => 'Andy',
            'lname' => 'Parinas'
        ];

        return Inertia::render('Dashboard/Index', $data);
    }
}

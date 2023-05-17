<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Services;
use App\Models\User;
use App\Models\Venue;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard');
    }
}

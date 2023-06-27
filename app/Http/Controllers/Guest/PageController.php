<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('index', [
            'trains' => $trains,
        ]);
    }

    public function today()
    {
        $today = Carbon::today();
        // dd($today);
        $trains = Train::where('departure_date', $today)->get();
        return view('today', [
            'trains' => $trains,
        ]);
    }
}

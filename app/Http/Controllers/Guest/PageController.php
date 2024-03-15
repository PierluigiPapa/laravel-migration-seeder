<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;


class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('pages.home', compact('trains'));
    }

    public function filter()
    {
        $filterTrains = Train::where('departure_time', '>', Carbon::now())->orderBy('departure_time', 'asc')->get();
        return view('pages.home', compact('filterTrains'));
    }
}

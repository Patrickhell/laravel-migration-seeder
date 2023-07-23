<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        $trainList = Train::where('departing_trains_today', '2023.07.23')->get();
        return view('guest.home', compact('trainList'));
    }
}

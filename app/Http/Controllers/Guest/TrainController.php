<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index()
    {
        $trainList = Train::limit(20)->get();
        return view('guest.train.index', compact('trainList'));
    }
}

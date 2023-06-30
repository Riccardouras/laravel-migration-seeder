<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now()->toDateString();

        $trains = Train::whereDate('orario_partenza', $currentDate)->get();

        return view('home', compact('trains'));
    }
}

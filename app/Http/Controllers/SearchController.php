<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Example;
use App\Models\Origin;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(): View|Factory|Application
    {
        $origin = request('origin');
        $destination = request('destination');
        $date = request('date');

        $schedules = Schedule::all();

        return view('search.index',['origin'=>$origin,'destination'=>$destination,'date'=>$date,'schedules'=>$schedules]);
    }
}


<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourDatesConfig;
use Illuminate\Support\Facades\DB;


class TourDatesController extends Controller
{
    public function view()
    {
        return view('tour_dates.view', [
            'tourDates' => DB::table('tour_dates_config')->where('tour_date', 'like', '2021-09-%')->get()
        ]);
    }
    public function is_tour_date_available()
    {
        return true;
    }
}

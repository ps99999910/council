<?php

namespace App\Http\Controllers;


use App\Models\TourBooking;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class BookingController extends Controller
{
//    public function __construct(array $attributes = [])
//    {
//        parent::__construct($attributes);
//    }


    public function store()
    {

        $attributes = request()->validate([

            'student_name' => 'required',
            'pos_code' => 'required',
            'mobile' => 'required',
            'kindergarten' => 'required',
          //  'school' => 'required',
            'email' => ['required', 'email', Rule::unique('tour_bookings', 'email')]
//            'body' => 'required',
//            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

//        $attributes['user_id'] = auth()->id();


        $attributes['year'] = request('year');
        $attributes['pos_code'] = request('pos_code');

        TourBooking::create($attributes);

        return redirect('/');
    }

}



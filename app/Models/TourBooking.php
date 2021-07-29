<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourBooking extends Model
{
    use HasFactory;

    protected $table = "tour_bookings";
    protected $primaryKey = 'id';

    protected $fillable = ['student_name','year','email','pos_code','mobile','kindergarten',
                            'school'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourDatesConfig extends Model
{
    use HasFactory;
    protected $table = "tour_dates_config";
    protected $primaryKey = 'id';

}

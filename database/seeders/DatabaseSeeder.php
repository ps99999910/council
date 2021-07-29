<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\TourDatesConfig;
use App\Models\TourBooking;
=======
>>>>>>> 2bf285d (First Commit)
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD


        $acad_year = "2021-22";
        $section = "P";
        $tour_dates = array("2021-09-01","2021-09-02","2021-09-03");
        $quota = 5;
        $lang = "E";
        $matrix_column = 1;
        $tour_time = "09:30";
        $tour_status = 1;
        $last_modified_by = "MWON";

        foreach ($tour_dates as $t) {
            TourDatesConfig::factory(1)->create([
                'acad_year' => $acad_year,
                'section' => $section,
                'tour_date' => $t,
                'quota' => $quota,
                'lang' => $lang,
                'matrix_column' => $matrix_column,
                'tour_time' => $tour_time,
                'tour_status' => $tour_status,

                'last_modified_by' => $last_modified_by
            ]);
        }


        TourBooking::factory(20)->create();
=======
>>>>>>> 2bf285d (First Commit)
    }
}

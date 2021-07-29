<?php

namespace Tests\Feature;

use App\Models\TourBooking;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class BookingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /*
    public function test_create_record_to_db()
    {
        $gb = TourBooking::create([
            'year' => '2021',
            'email' => '212344434242242442',
            'student_name' => 'm4m',
            'pos_code' => 'P',
            'mobile' => '21341234',
            'kindergarten' => 'veo k',
            'school' => 'VSA'

        ]);
        $id = DB::getPdo()->lastInsertId();;

        $db_record = DB::table('tour_bookings')->where('id', '=', $id)->get();
        $this->assertEquals($gb->email, $db_record[0]->email);
    }
    */
    public function test_create_record()
    {

        $response = $this->post('/booking/store', [
            'year' => '2021',
            'email' => 'xx2422e3xdu.hk',
            'student_name' => 'mm',
            'pos_code' => 'P',
            'mobile' => '21341234',
            'kindergarten' => 'veo k',
            'school' => 'VSA'

        ]);
        $response->assertSessionHasNoErrors();

       }

}


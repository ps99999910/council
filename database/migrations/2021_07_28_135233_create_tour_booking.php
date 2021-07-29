<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tour_bookings', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('year');
            $table->string('email');
            $table->string('pos_code')->nullable();
            $table->string('mobile')->nullable();
            $table->string('student_name')->nullable();
            $table->string('kindergarten')->nullable();
            $table->string('school')->nullable();
            $table->string('class_attend')->nullable();
            $table->string('tour_date')->nullable();
            $table->string('participant')->nullable();
            $table->string('participant_json')->nullable();
            $table->string('year_apply')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('other_name')->nullable();

            $table->string('last_modified_by')->nullable();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_bookings');
    }
}

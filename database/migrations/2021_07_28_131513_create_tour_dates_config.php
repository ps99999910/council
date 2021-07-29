<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourDatesConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        Schema::create('tour_dates_config', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('acad_year');
            $table->string('section');
            $table->date('tour_date');
            $table->integer('quota');
            $table->string('lang');
            $table->integer('matrix_column');
            $table->string('tour_time');
            $table->boolean('tour_status');
            $table->string('last_modified_by');
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
        Schema::dropIfExists('tour_dates_config');
    }
}

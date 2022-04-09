<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffwagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffwages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_name')->references('id')->on('staffs')->onDelete('cascade');
            $table->date('joining_date');
            $table->float('wage');
            $table->foreignId('duration_id')->references('id')->on('durations')->onDelete('cascade');
            $table->float('total_wage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffwages');
    }
}

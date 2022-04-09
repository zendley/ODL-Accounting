<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffspayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffspayouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_name')->references('id')->on('staffs')->onDelete('cascade');
            $table->date('date');
            $table->float('paid_wage');
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
        Schema::dropIfExists('staffspayouts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierspayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplierspayouts', function (Blueprint $table) {
            $table->id();
            $table->string('payer_name');
            $table->date('date');
            $table->foreignId('supplier_name')->references('id')->on('suppliers')->onDelete('cascade');
            $table->float('invoice_no');
            $table->float('total_amount');
            $table->float('paid_amount');
            $table->string('payment_method');
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
        Schema::dropIfExists('supplierspayouts');
    }
}

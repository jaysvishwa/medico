<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('appointment_id')->nullable();
            $table->date('appointment_date')->nullable();
            $table->date('bill_date')->nullable();
            $table->string('bill_status')->nullable()->default('pending');
            $table->string('bill_charge')->nullable(); 
            $table->string('bill_paid')->nullable();
            $table->string('bill_pending')->nullable();
            $table->text('comment')->nullable();     
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
        Schema::dropIfExists('billings');
    }
}

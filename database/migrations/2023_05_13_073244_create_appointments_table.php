<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('request_id');
            $table->integer('service_id');
            $table->string('date');
            $table->string('start-time');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->integer('phone_no');
            $table->text('notes')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}

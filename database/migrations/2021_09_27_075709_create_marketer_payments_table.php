<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketerPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketer_payments', function (Blueprint $table) {
            $table->id();
            $table->string("marketer_name")->nullable();
            $table->string("students_enrolled")->nullable();
            $table->string("students_name")->nullable();
            $table->string("students_course")->nullable();
            $table->string("course_price")->nullable();     
            $table->string("percentage")->nullable();
            $table->string("marketer_price")->nullable();
            $table->string("status")->nullable();
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
        Schema::dropIfExists('marketer_payments');
    }
}

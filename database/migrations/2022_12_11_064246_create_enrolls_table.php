<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolls', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id');
            $table->integer('student_id');
            $table->text('enroll_date');
            $table->text('enroll_timestamp');
            $table->string('enroll_status')->default('Pending');
            $table->string('payment_type');
            $table->string('payment_status')->default('Pending');
            $table->integer('payment_amount')->default(0);
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
        Schema::dropIfExists('enrolls');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferCourseInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_course_infos', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('course_sl')->unsigned();
            $table->bigInteger('session_sl')->unsigned();
            $table->bigInteger('teacher_sl')->unsigned();

            $table->string('section');
            $table->bigInteger('student_capacity');
           

            $table->foreign('course_sl')
            ->references('id')->on('course_infos')
            ->onDelete('cascade');

            $table->foreign('session_sl')
            ->references('id')->on('session_infos')
            ->onDelete('cascade');

            $table->foreign('teacher_sl')
            ->references('id')->on('teacher_infos')
            ->onDelete('cascade');

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
        Schema::dropIfExists('offer_course_infos');
    }
}

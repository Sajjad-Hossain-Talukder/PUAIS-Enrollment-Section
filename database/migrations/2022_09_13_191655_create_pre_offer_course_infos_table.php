<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreOfferCourseInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_offer_course_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_sl')->unsigned();
            $table->bigInteger('session_sl')->unsigned();

            $table->foreign('course_sl')
            ->references('id')->on('course_infos')
            ->onDelete('cascade');

            $table->foreign('session_sl')
            ->references('id')->on('session_infos')
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
        Schema::dropIfExists('pre_offer_course_infos');
    }
}

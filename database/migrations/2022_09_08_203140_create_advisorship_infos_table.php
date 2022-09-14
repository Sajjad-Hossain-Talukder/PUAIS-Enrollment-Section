<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvisorshipInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisorship_infos', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('student_sl')->unsigned();
            $table->bigInteger('teacher_sl')->unsigned();

            $table->foreign('student_sl')
            ->references('id')->on('student_infos')
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
        Schema::dropIfExists('advisorship_infos');
    }
}

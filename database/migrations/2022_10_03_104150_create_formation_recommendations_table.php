<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_recommendations', function (Blueprint $table) {
            $table->id();
            $table->integer('id_formation')->unsigned();
            $table->foreign('id_formation')->references('id')->on('formations');
            $table->integer('id_coach')->unsigned();
            $table->foreign('id_coach')->references('id')->on('coaches');
            $table->integer('id_student_test')->unsigned();
            $table->foreign('id_student_test')->references('id')->on('student_tests');
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
        Schema::dropIfExists('formation_recommendations');
    }
}

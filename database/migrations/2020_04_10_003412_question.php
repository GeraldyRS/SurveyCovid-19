<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Question extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id');
            $table->integer('q1')->nullable();
            $table->integer('q2')->nullable();
            $table->integer('q3')->nullable();
            $table->integer('q4')->nullable();
            $table->integer('q5')->nullable();
            $table->integer('q6')->nullable();
            $table->integer('q7')->nullable();
            $table->integer('q8')->nullable();
            $table->integer('q9')->nullable();
            $table->integer('q10')->nullable();
            $table->integer('q11')->nullable();
            $table->integer('q12')->nullable();
            $table->integer('q13')->nullable();
            $table->integer('q14')->nullable();
            $table->integer('q15')->nullable();
            $table->integer('q16')->nullable();
            $table->integer('q17')->nullable();
            $table->integer('q18')->nullable();
            $table->integer('q19')->nullable();
            $table->integer('q20')->nullable();
            $table->integer('q21')->nullable();
            $table->string('updated_at')->nullable();
            $table->string('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

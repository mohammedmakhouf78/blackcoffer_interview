<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('end_year')->nullable();
            $table->string('citylng')->nullable();
            $table->string('citylat')->nullable();
            $table->integer('intensity')->nullable();
            $table->string('sector')->nullable();
            $table->string('topic')->nullable();
            $table->text('insight')->nullable();
            $table->string('swot')->nullable();
            $table->text('url')->nullable();
            $table->string('region')->nullable();
            $table->string('start_year')->nullable();
            $table->integer('impact')->nullable();
            $table->string('added')->nullable();
            $table->string('published')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->integer('relevance')->nullable();
            $table->string('pestle')->nullable();
            $table->string('source')->nullable();
            $table->text('title')->nullable();
            $table->integer('likelihood')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}

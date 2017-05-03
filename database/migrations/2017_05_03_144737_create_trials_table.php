<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status_id')->unsigned()->nullable();
            $table->string('number');
            $table->string('court');
            $table->string('subject');
            $table->text('description')->nullable();

            $table->timestamps();
        });

        Schema::table('trials', function (Blueprint $table) {
            $table->foreign('status_id')
                ->references('id')
                ->on('statuses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trials');
    }
}

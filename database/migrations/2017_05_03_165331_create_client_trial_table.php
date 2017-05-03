<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTrialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_trial', function (Blueprint $table) {
            $table->integer('client_id')->unsigned();
            $table->integer('trial_id')->unsigned();

            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');

            $table->foreign('trial_id')
                ->references('id')
                ->on('trials')
                ->onDelete('cascade');

            $table->primary(['client_id', 'trial_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_trial');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttorneyTrialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attorney_trial', function (Blueprint $table) {
            $table->integer('attorney_id')->unsigned();
            $table->integer('trial_id')->unsigned();

            $table->foreign('attorney_id')
                ->references('id')
                ->on('attorneys')
                ->onDelete('cascade');

            $table->foreign('trial_id')
                ->references('id')
                ->on('trials')
                ->onDelete('cascade');

            $table->primary(['attorney_id', 'trial_id']);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attorney_trial');
    }
}

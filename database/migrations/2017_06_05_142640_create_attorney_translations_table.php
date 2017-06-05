<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttorneyTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attorney_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('attorney_id')->unsigned();
            $table->string('locale')->index();
            $table->text('description')->nullable();

            $table->unique(['attorney_id', 'locale']);
        });

        Schema::table('attorney_translations', function (Blueprint $table) {
            $table->foreign('attorney_id')->references('id')->on('attorneys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attorney_translations');
    }
}

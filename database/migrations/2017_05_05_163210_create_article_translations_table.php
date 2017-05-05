<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->string('locale')->index();

            $table->text('subject')->nullable();
            $table->text('description')->nullable();

            $table->unique(['article_id', 'locale']);
        });
        Schema::table('article_translations', function (Blueprint $table) {
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_translations');
    }
}

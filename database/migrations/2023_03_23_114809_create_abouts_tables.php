<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTables extends Migration
{
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->integer('position')->unsigned()->nullable();
            $table->string('title', 200)->nullable();
            $table->string('description', 200)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('fanpage', 200)->nullable();
            $table->string('phone_number', 200)->nullable();
    
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('about_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'about');
        });

        Schema::create('about_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'about');
        });

        Schema::create('about_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'about');
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_revisions');
        Schema::dropIfExists('about_translations');
        Schema::dropIfExists('about_slugs');
        Schema::dropIfExists('abouts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaintCategoriesTables extends Migration
{
    public function up()
    {
        Schema::create('paint_categories', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->integer('position')->unsigned()->nullable();
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('paint_category_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'paint_category');
        });

        Schema::create('paint_category_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'paint_category');
        });

        Schema::create('paint_category_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'paint_category');
        });
    }

    public function down()
    {
        Schema::dropIfExists('paint_category_revisions');
        Schema::dropIfExists('paint_category_translations');
        Schema::dropIfExists('paint_category_slugs');
        Schema::dropIfExists('paint_categories');
    }
}

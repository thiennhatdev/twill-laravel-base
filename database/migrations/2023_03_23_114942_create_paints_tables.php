<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaintsTables extends Migration
{
    public function up()
    {
        Schema::create('paints', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->integer('position')->unsigned()->nullable();
            $table->string('title', 200)->nullable();
            $table->string('type', 200)->nullable();
            $table->string('feature', 200)->nullable();
            $table->string('specifications', 200)->nullable();
            $table->string('origin_price', 200)->nullable();
            $table->string('sell_price', 200)->nullable();
            $table->string('color', 200)->nullable();
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('paint_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'paint');
        });

        Schema::create('paint_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'paint');
        });

        Schema::create('paint_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'paint');
        });
    }

    public function down()
    {
        Schema::dropIfExists('paint_revisions');
        Schema::dropIfExists('paint_translations');
        Schema::dropIfExists('paint_slugs');
        Schema::dropIfExists('paints');
    }
}

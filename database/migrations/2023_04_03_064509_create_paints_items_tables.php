<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaintsItemsTables extends Migration
{
    public function up()
    {
        Schema::create('paints_items', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('specifications', 200)->nullable();
            $table->string('origin_price', 200)->nullable();
            $table->string('sell_price', 200)->nullable();
            $table->string('color', 200)->nullable();
            $table->integer('position')->unsigned()->nullable();
            $table->foreignId('paint_id')
                ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        

        

        
    }

    public function down()
    {
        
        Schema::dropIfExists('paints_items');
    }
}

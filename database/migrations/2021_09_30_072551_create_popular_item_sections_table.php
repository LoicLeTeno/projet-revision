<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopularItemSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popular_item_sections', function (Blueprint $table) {
            $table->id();
            // Image
            $table->string('image');

            // Details
            $table->string('desp');
            $table->bigInteger('price');

            // Text
            $table->string('titre');
            $table->mediumText('text');

            // Profil
            $table->string('photo');
            $table->string('name');
            $table->bigInteger('view');
            $table->bigInteger('love');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('popular_item_sections');
    }
}

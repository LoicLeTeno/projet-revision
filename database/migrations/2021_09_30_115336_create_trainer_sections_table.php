<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_sections', function (Blueprint $table) {
            $table->id();
            // Profil
            $table->string('photo');

            // Texte
            $table->string('name');
            $table->string('desp');
            $table->mediumText('texte');

            // Link
            $table->string('link_twitter');
            $table->string('link_facebook');
            $table->string('link_instagram');
            $table->string('link_linkedin');
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
        Schema::dropIfExists('trainer_sections');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            // FOOTER contact
            $table->string('user');
            $table->string('adress');
            $table->string('city');
            $table->string('country');
            $table->string('phone');
            $table->string('email');

            // FOOTER link
            $table->string('home_link');
            $table->string('aboutUs_link');
            $table->string('services_link');
            $table->string('terms_link');
            $table->string('privacy_link');

            // FOOTER service
            $table->string('webDesign_link');
            $table->string('webDevelopment_link');
            $table->string('product_link');
            $table->string('marketing_link');
            $table->string('graphic_link');

            // FOOTER newsletter
            $table->string('p_newsletter');

            // Design by
            $table->string('design_link');
            $table->string('by');

            // Réseaux sociaux
            $table->string('twitter_link');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('googlePlus_link');
            $table->string('linkedin_link');

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
        Schema::dropIfExists('footers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('restaurant_articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('restaurant_id', false, true);
            $table->foreign('restaurant_id')->references('id')->on('restaurants');

            $table->bigInteger('article_id', false, true);
            $table->foreign('article_id')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_articles');
    }
};

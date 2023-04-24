<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_reviews', function (Blueprint $table) {
            $table->id();
            $table->use_id();
            $table->category_id();
            $table->place_id();
            $table->text();
            $table->stars();
             $table->created_at();
             $table->update_at();
              $table->deleted_at();
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
        Schema::dropIfExists('_reviews');
    }
};

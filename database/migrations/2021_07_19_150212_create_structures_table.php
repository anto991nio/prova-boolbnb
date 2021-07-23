<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('province');
            $table->string('city');
            $table->string('houseNumber');
            $table->decimal('lat', 8,6)->nullable();
            $table->decimal('long', 9,6)->nullable();
            $table->tinyInteger('rooms');
            $table->tinyInteger('beds');
            $table->tinyInteger('bathrooms');
            $table->smallInteger('sqm');
            $table->boolean('visible')->default(1);
            $table->string('slug');
            $table->text('cover_img_path')->nullable();
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
        Schema::dropIfExists('structures');
    }
}

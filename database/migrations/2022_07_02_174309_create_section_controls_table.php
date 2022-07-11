<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_controls', function (Blueprint $table) {
            $table->id();
            $table->integer('homesection');
            $table->integer('aboutsection');
            $table->integer('portfoliosection');
            $table->integer('blogsection');
            $table->integer('contactsection');
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
        Schema::dropIfExists('section_controls');
    }
}

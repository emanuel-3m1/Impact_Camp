<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('campsites_id')->unsigned();
            $table->timestamps();
            $table->foreign('camp_zones_id')->references('id')->on('camp_zones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_sites');
    }
};

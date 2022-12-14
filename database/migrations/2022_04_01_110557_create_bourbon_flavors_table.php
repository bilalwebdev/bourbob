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
        Schema::create('bourbon_flavors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bourbon_id');
            $table->bigInteger('flavor_id');
            $table->boolean('dominant')->default(0);
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
        Schema::dropIfExists('bourbon_flavors');
    }
};

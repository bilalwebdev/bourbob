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
        Schema::create('bourbons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('image')->nullable();
            $table->longText('description')->nullable();
            $table->text('video')->nullable();
            $table->string('age')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->string('proof')->nullable();
            $table->bigInteger('brand_id')->nullable();
            $table->bigInteger('distillery_id')->nullable();
            $table->bigInteger('producer_id')->nullable();
            $table->bigInteger('state_id')->nullable();
            $table->boolean('active')->default(0);
            $table->text('note')->nullable();
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
        Schema::dropIfExists('bourbons');
    }
};

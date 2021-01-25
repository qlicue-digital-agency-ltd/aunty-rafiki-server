<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_levels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('level');
            $table->string('status');
            $table->string('title');
            $table->string('subtitle');
            $table->double('quantity');
            $table->date('date');
            $table->string('uid');
            $table->softDeletes();
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
        Schema::dropIfExists('blood_levels');
    }
}

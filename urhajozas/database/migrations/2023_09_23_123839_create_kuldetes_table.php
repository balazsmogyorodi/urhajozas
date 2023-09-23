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
        Schema::create('kuldetes', function (Blueprint $table) {
            $table->string("kod_nev");
            $table->string("nev");
            $table->string("cel");
            $table->dateTime("kezdes");
            $table->dateTime("befejezve");
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
        Schema::dropIfExists('kuldetes');
    }
};

<?php

use App\Models\Urhajo;
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
        Schema::create('urhajo', function (Blueprint $table) {
            $table->id();
            $table->string("nev");
            $table->foreignId('kuldetes_id')->references('kod_nev')->on('Kuldetes');
            $table->timestamps();
        });

        Urhajo::create([
            'nev' => 'Nasa'
        ]);

        Urhajo::create([
            'nev' => 'T-series'
        ]);

        Urhajo::create([
            'nev' => 'Rakéta'
        ]);

        Urhajo::create([
            'nev' => 'Fejszés'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urhajo');
    }
};

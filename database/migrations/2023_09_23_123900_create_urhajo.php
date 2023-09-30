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
            $table->foreignId('kuldetes_id')->references('kod_id')->on('Kuldetes');
            $table->timestamps();
        });

        Urhajo::create([
            'nev' => 'Nasa',
            'kuldetes_id' => 1
        ]);

        Urhajo::create([
            'nev' => 'T-series',
            'kuldetes_id' => 2
        ]);

        Urhajo::create([
            'nev' => 'Rakéta',
            'kuldetes_id' => 1
        ]);

        Urhajo::create([
            'nev' => 'Fejszés',
            'kuldetes_id' => 3
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

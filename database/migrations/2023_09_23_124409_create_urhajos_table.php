<?php

use App\Models\Urhajos;
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
        Schema::create('urhajos', function (Blueprint $table) {
            $table->id("azonosito");
            $table->string("nev");
            $table->date("szuletes");
            $table->foreignId('urhajoId')->references('id')->on('Urhajo');
            $table->timestamps();
        });

        Urhajos::create([
            'nev' => 'Nevem Álmos',
            'szuletes' => '2002.06.02',
            'urhajoId' => '1'
        ]);
        Urhajos::create([
            'nev' => 'Nevem Előd',
            'szuletes' => '2002.06.02',
            'urhajoId' => '1'
        ]);
        Urhajos::create([
            'nev' => 'Nevem Huba',
            'szuletes' => '2002.06.02',
            'urhajoId' => '2'
        ]);

        Urhajos::create([
            'nev' => 'Nevem Kun',
            'szuletes' => '2002.06.02',
            'urhajoId' => '3'
        ]);
        Urhajos::create([
            'nev' => 'Nevem Ond',
            'szuletes' => '2002.06.02',
            'urhajoId' => '3'
        ]);
        Urhajos::create([
            'nev' => 'Nevem Tas',
            'szuletes' => '2002.06.02',
            'urhajoId' => '3'
        ]);

        Urhajos::create([
            'azonosito' => 6,
            'nev' => 'Nevem Töhötöm',
            'szuletes' => '2002.06.02',
            'urhajoId' => '3'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urhajos');
    }
};

<?php

use App\Models\Kuldetes;
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
            $table->id("kod_id");
            $table->string("nev");
            $table->string("cel");
            $table->date("kezdes");
            $table->date("befejezve");
            $table->timestamps();
        });

        Kuldetes::create([
            'nev'=> 'Hold',
            'cel' => 'Landolni a Hold felszinére.',
            'kezdes' => '1976.03.13',
            'befejezve'=> '1976.03.22'
        ]);
        Kuldetes::create([
            'nev'=> 'Űr séta és űrállomás ellenőrzsée',
            'cel' => 'Az űrállomás állapotának vizsgálata.',
            'kezdes' => '1979.05.13',
            'befejezve'=> '1979.05.15'
        ]);
        Kuldetes::create([
            'nev'=> 'UÚj eszközök beszerelése',
            'cel' => 'Az új eszközök beépitése az űrállomásba.',
            'kezdes' => '1979.05.13',
            'befejezve'=> '1976.05.22'
        ]);
        Kuldetes::create([
            'nev'=> 'Mars fele',
            'cel' => 'A Marsig utazás egy bizonyos pontig.',
            'kezdes' => '2032.06.02',
            'befejezve'=> '2033.01.28'
        ]);

        


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

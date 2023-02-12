<?php

use App\Models\Coin;
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
        Schema::create('coins', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->string('abbreviation',10);
            $table->string('coin_path',200);
        });
        Coin::insert([
            'name' => 'Pièce de Cuivre',
            'abbreviation' => 'PC',
            'coin_path' => 'storage/img/coins/copper_coin.png'
         ]);
         Coin::insert([
            'name' => 'Pièce d\'Argent',
            'abbreviation' => 'PA',
            'coin_path' => 'storage/img/coins/silver_coin.png'
         ]);
         Coin::insert([
            'name' => 'Pièce d\'Electrum',
            'abbreviation' => 'PE',
            'coin_path' => 'storage/img/coins/electrum_coin.png'
         ]);
         Coin::insert([
            'name' => 'Pièce d\'Or',
            'abbreviation' => 'PO',
            'coin_path' => 'storage/img/coins/gold_coin.png'
         ]);
         Coin::insert([
            'name' => 'Pièce de Platine',
            'abbreviation' => 'PP',
            'coin_path' => 'storage/img/coins/platinum_coin.png'
         ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coins');
    }
};

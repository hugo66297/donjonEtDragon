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
        });
        Coin::insert([
            'name' => 'Pièce de Cuivre',
            'abbreviation' => 'PC'
         ]);
         Coin::insert([
            'name' => 'Pièce d\'Argent',
            'abbreviation' => 'PA'
         ]);
         Coin::insert([
            'name' => 'Pièce d\'Electrum',
            'abbreviation' => 'PE'
         ]);
         Coin::insert([
            'name' => 'Pièce d\'Or',
            'abbreviation' => 'PO'
         ]);
         Coin::insert([
            'name' => 'Pièce de Platine',
            'abbreviation' => 'PP'
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

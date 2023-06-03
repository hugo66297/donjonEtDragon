<?php

use App\Models\Character;
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
        Schema::create('character_coin', function (Blueprint $table) {
            $table->primary(['character_id', 'coin_id']);
            $table->foreignIdFor(Character::class)->constrained();
            $table->foreignIdFor(Coin::class)->constrained();
            $table->integer('quantity')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_coin');
    }
};

<?php

use App\Models\Adventure;
use App\Models\Character;
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
        Schema::create('adventure_character', function (Blueprint $table) {
            $table->primary(['character_id', 'adventure_id']);
            $table->foreignIdFor(Character::class)->constrained();
            $table->foreignIdFor(Adventure::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adventure_character');
    }
};

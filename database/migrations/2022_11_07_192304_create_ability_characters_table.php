<?php

use App\Models\Ability;
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
        Schema::create('ability_character', function (Blueprint $table) {
            $table->primary(['character_id','ability_id']);
            $table->foreignIdFor(Character::class)->constrained();
            $table->foreignIdFor(Ability::class)->constrained();
            $table->integer('ability_value')->default(0);
            $table->integer('modifier')->default(0);
            $table->boolean('is_proficient')->default(false);
            $table->integer('other_modifier')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ability_character');
    }
};

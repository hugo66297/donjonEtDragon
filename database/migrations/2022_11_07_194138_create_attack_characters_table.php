<?php

use App\Models\Attack;
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
        Schema::create('attack_character', function (Blueprint $table) {
            $table->primary(['character_id', 'attack_id']);
            $table->foreignIdFor(Character::class)->constrained();
            $table->foreignIdFor(Attack::class)->constrained();
            $table->text('other_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attack_character');
    }
};

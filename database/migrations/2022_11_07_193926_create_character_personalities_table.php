<?php

use App\Models\Character;
use App\Models\Personality;
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
        Schema::create('character_personality', function (Blueprint $table) {
            $table->primary(['character_id','personality_id']);
            $table->foreignIdFor(Character::class)->constrained();
            $table->foreignIdFor(Personality::class)->constrained();
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_personality');
    }
};

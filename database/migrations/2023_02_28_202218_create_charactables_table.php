<?php

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
        Schema::create('charactables', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Character::class)->constrained();
            $table->integer('charactable_id');
            $table->string('charactable_type');
            $table->integer('ability_value')->nullable();
            $table->boolean('is_proficient')->nullable();
            $table->integer('other_modifier_ability')->nullable();
            $table->integer('other_modifier_skill')->nullable();
            $table->integer('other_modifier_throw')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charactables');
    }
};

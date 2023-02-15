<?php

use App\Models\Ability;
use App\Models\Skill;
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
        Schema::create('ability_skill', function (Blueprint $table) {
            $table->primary(['ability_id','skill_id']);
            $table->foreignIdFor(Ability::class)->constrained();
            $table->foreignIdFor(Skill::class)->constrained();
            $table->boolean('is_proficient')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ability_skill');
    }
};

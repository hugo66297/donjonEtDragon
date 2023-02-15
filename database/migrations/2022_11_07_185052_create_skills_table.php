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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->foreignIdFor(Ability::class)->constrained();
        });
        Skill::insert([
            'name' => 'Acrobaties',
            'ability_id' => 2
         ]);
        Skill::insert([
            'name' => 'Arcanes',
            'ability_id' => 4
        ]);
        Skill::insert([
             'name' => 'Athlétisme',
             'ability_id' => 1
        ]);
        Skill::insert([
            'name' => 'Discrétion',
            'ability_id' => 2
        ]);
        Skill::insert([
            'name' => 'Dressage',
            'ability_id' => 5
        ]);
        Skill::insert([
            'name' => 'Escamotage',
            'ability_id' => 2
        ]);
        Skill::insert([
            'name' => 'Histoire',
            'ability_id' => 4
        ]);
        Skill::insert([
            'name' => 'Intimidation',
            'ability_id' => 6
        ]);
        Skill::insert([
            'name' => 'Investigation',
            'ability_id' => 4
        ]);
        Skill::insert([
            'name' => 'Médecine',
            'ability_id' => 5
        ]);
        Skill::insert([
            'name' => 'Nature',
            'ability_id' => 4
        ]);
        Skill::insert([
            'name' => 'Perception',
            'ability_id' => 5
        ]);
        Skill::insert([
            'name' => 'Perspicacité',
            'ability_id' => 5
        ]);
        Skill::insert([
            'name' => 'Persuasion',
            'ability_id' => 6
        ]);
        Skill::insert([
            'name' => 'Religion',
            'ability_id' => 4
        ]);
        Skill::insert([
            'name' => 'Représentation',
            'ability_id' => 6
        ]);
        Skill::insert([
            'name' => 'Supercherie',
            'ability_id' => 6
        ]);
        Skill::insert([
            'name' => 'Survie',
            'ability_id' => 5
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
};

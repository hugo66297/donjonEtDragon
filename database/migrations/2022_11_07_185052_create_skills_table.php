<?php

use App\Models\Ability;
use App\Models\Skill;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name');
            $table->foreignIdFor(Ability::class)->constrained();
        });
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Acrobaties',
            'ability_id' => Ability::where('slug', 'dexterite')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Arcanes',
            'ability_id' => Ability::where('slug', 'intelligence')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Athlétisme',
            'ability_id' => Ability::where('slug', 'force')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Discrétion',
            'ability_id' => Ability::where('slug', 'dexterite')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Dressage',
            'ability_id' => Ability::where('slug', 'sagesse')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Escamotage',
            'ability_id' => Ability::where('slug', 'dexterite')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Histoire',
            'ability_id' => Ability::where('slug', 'intelligence')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Intimidation',
            'ability_id' => Ability::where('slug', 'charisme')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Investigation',
            'ability_id' => Ability::where('slug', 'intelligence')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Médecine',
            'ability_id' => Ability::where('slug', 'sagesse')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Nature',
            'ability_id' => Ability::where('slug', 'intelligence')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Perception',
            'ability_id' => Ability::where('slug', 'sagesse')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Perspicacité',
            'ability_id' => Ability::where('slug', 'sagesse')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Persuasion',
            'ability_id' => Ability::where('slug', 'charisme')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Religion',
            'ability_id' => Ability::where('slug', 'intelligence')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Représentation',
            'ability_id' => Ability::where('slug', 'charisme')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Supercherie',
            'ability_id' => Ability::where('slug', 'charisme')->first()->getKey()
        ]);
        Skill::insert([
            'id' => Str::uuid(),
            'name' => 'Survie',
            'ability_id' => Ability::where('slug', 'sagesse')->first()->getKey()
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

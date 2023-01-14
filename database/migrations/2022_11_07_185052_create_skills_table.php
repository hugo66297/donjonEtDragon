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
        });
        Skill::insert([
            'name' => 'Acrobaties'
         ]);
         Skill::insert([
            'name' => 'Arcanes'
         ]);
         Skill::insert([
            'name' => 'Athlétisme'
         ]);
         Skill::insert([
            'name' => 'Discrétion'
         ]);
         Skill::insert([
            'name' => 'Dressage'
         ]);
         Skill::insert([
            'name' => 'Escamotage'
         ]);
         Skill::insert([
            'name' => 'Histoire'
         ]);
         Skill::insert([
            'name' => 'Intimidation'
         ]);
         Skill::insert([
            'name' => 'Investigation'
         ]);
         Skill::insert([
            'name' => 'Médecine'
         ]);
         Skill::insert([
            'name' => 'Nature'
         ]);
         Skill::insert([
            'name' => 'Perception'
         ]);
         Skill::insert([
            'name' => 'Perspicacité'
         ]);
         Skill::insert([
            'name' => 'Persuasion'
         ]);
         Skill::insert([
            'name' => 'Religion'
         ]);
         Skill::insert([
            'name' => 'Représentation'
         ]);
         Skill::insert([
            'name' => 'Supercherie'
         ]);
         Skill::insert([
            'name' => 'Survie'
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

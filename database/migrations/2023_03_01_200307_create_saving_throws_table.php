<?php

use App\Models\Ability;
use App\Models\SavingThrow;
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
        Schema::create('saving_throws', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 191);
            $table->foreignIdFor(Ability::class)->constrained();
        });

        SavingThrow::insert([
            'id' => Str::uuid(),
            'name' => 'Force',
            'ability_id' => Ability::where('name', 'Force')->first()->getKey()
        ]);
        SavingThrow::insert([
            'id' => Str::uuid(),
            'name' => 'Dextérité',
            'ability_id' => Ability::where('name', 'Dextérité')->first()->getKey()
        ]);
        SavingThrow::insert([
            'id' => Str::uuid(),
            'name' => 'Constitution',
            'ability_id' => Ability::where('name', 'Constitution')->first()->getKey()
        ]);
        SavingThrow::insert([
            'id' => Str::uuid(),
            'name' => 'Intelligence',
            'ability_id' => Ability::where('name', 'Intelligence')->first()->getKey()
        ]);
        SavingThrow::insert([
            'id' => Str::uuid(),
            'name' => 'Sagesse',
            'ability_id' => Ability::where('name', 'Sagesse')->first()->getKey()
        ]);
        SavingThrow::insert([
            'id' => Str::uuid(),
            'name' => 'Charisme',
            'ability_id' => Ability::where('name', 'Charisme')->first()->getKey()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saving_throws');
    }
};

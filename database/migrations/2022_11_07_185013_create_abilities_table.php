<?php

use App\Models\Ability;
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
        Schema::create('abilities', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 191);
            $table->string('slug', 191);
            $table->string('color', 191);
            $table->string('icon', 191);
        });
        Ability::insert([
            'id' => Str::uuid(),
            'name' => 'Force',
            'slug' => 'force',
            'color' => 'yellow-600',
            'icon' => 'fa-fist-raised'
        ]);
        Ability::insert([
            'id' => Str::uuid(),
            'name' => 'Dextérité',
            'slug' => 'dexterite',
            'color' => 'lime-600',
            'icon' => 'fa-dice'
        ]);
        Ability::insert([
            'id' => Str::uuid(),
            'name' => 'Constitution',
            'slug' => 'constitution',
            'color' => 'blue-600',
            'icon' => 'fa-male'
        ]);
        Ability::insert([
            'id' => Str::uuid(),
            'name' => 'Intelligence',
            'slug' => 'intelligence',
            'color' => 'red-600',
            'icon' => 'fa-brain'
        ]);
        Ability::insert([
            'id' => Str::uuid(),
            'name' => 'Sagesse',
            'slug' => 'sagesse',
            'color' => 'fuchsia-600',
            'icon' => 'fa-book'
        ]);
        Ability::insert([
            'id' => Str::uuid(),
            'name' => 'Charisme',
            'slug' => 'charisme',
            'color' => 'amber-400',
            'icon' => 'fa-bolt'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abilities');
    }
};

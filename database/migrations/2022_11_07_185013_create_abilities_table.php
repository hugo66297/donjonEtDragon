<?php

use App\Models\Ability;
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
        Schema::create('abilities', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->string('color', 191);
            $table->string('icon', 191);
        });
        Ability::insert([
            'name' => 'Force',
            'color' => 'yellow-600',
            'icon' => 'fa-fist-raised'
        ]);
        Ability::insert([
            'name' => 'Dextérité',
            'color' => 'lime-600',
            'icon' => 'fa-dice'
        ]);
        Ability::insert([
            'name' => 'Constitution',
            'color' => 'blue-600',
            'icon' => 'fa-male'
        ]);
        Ability::insert([
            'name' => 'Intelligence',
            'color' => 'red-600',
            'icon' => 'fa-brain'
        ]);
        Ability::insert([
            'name' => 'Sagesse',
            'color' => 'fuchsia-600',
            'icon' => 'fa-book'
        ]);
        Ability::insert([
            'name' => 'Charisme',
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

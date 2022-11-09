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
        });
        Ability::insert([
            'name' => 'Force'
        ]);
        Ability::insert([
            'name' => 'Dextérité'
        ]);
        Ability::insert([
            'name' => 'Constitution'
        ]);
        Ability::insert([
            'name' => 'Intelligence'
        ]);
        Ability::insert([
            'name' => 'Sagesse'
        ]);
        Ability::insert([
            'name' => 'Charisme'
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

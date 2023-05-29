<?php

use App\Models\Attack;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attacks', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 191);
            $table->text('description')->nullable();
        });
        Attack::insert([
            'id' => Str::uuid(),
            'name' => 'Tours de magie',
        ]);
        Attack::insert([
            'id' => Str::uuid(),
            'name' => 'Emplacements de sorts',
        ]);
        Attack::insert([
            'id' => Str::uuid(),
            'name' => 'Sorts préparés',
        ]);
        Attack::insert([
            'id' => Str::uuid(),
            'name' => 'Attaque sournoise',
            'description' => '<p>Une fois par tour, vous pouvez infliger 1d6 dégâts supplémentaires à une créature si vous l\'avez touchée avec une attaque basée sur la Dextérité (avec votre épée courte ou votre arc court, par exemple) et que vous êtes avantagé sur votre jet d\'attaque. Vous n\'avez pas besoin d\'être avantagé sur le jet d\'attaque si un autre ennemi de votre cible se trouve dans un rayon de 1,50 mètre autour d\'elle, à condition que cet ennemi ne soit pas neutralisé. Par contre, vous ne pouvez pas infliger de dégâts supplémentaires si vous êtes désavantagé sur votre jet d\'attaque.</p>'
        ]);
        Attack::insert([
            'id' => Str::uuid(),
            'name' => 'Grimoire',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attacks');
    }
};

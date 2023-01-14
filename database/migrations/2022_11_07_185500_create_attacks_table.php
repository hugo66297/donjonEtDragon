<?php

use App\Models\Attack;
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
        Schema::create('attacks', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->text('description');
        });
        Attack::insert([
            'name' => 'Tours de magie',
            'description'=> 'Vous connaissez flamme sacrée, lumière et thaumaturgie et vous pouvez les lancer à volonté. Ces sorts sont décrits dans le livret de règles.'
        ]);
        Attack::insert([
            'name' => 'Emplacements de sorts',
            'description'=> 'Vous possédez deux emplacements de sorts de niveau 1 que vous pouvez utiliser pour lancer vos sorts préparés.'
        ]);
        Attack::insert([
            'name' => 'Sorts préparés',
            'description'=> 'Vous préparez quatre sorts de niveau 1, choisis dans la liste des sorts de clerc du livret de règles, que vous serez prêt à lancer. Par ailleurs, vous avez toujours deux sorts de domaine préparés : bénédiction et soin des blessures.'
        ]);
        Attack::insert([
            'name' => 'Attaque sournoise',
            'description'=> 'Une fois par tour, vous pouvez infliger 1d6 dégâts supplémentaires à une créature si vous l\'avez touchée avec une attaque basée sur la Dextérité (avec votre épée courte ou votre arc court, par exemple) et que vous êtes avantagé sur votre jet d\'attaque. Vous n\'avez pas besoin d\'être avantagé sur le jet d\'attaque si un autre ennemi de votre cible se trouve dans un rayon de 1,50 mètre autour d\'elle, à condition que cet ennemi ne soit pas neutralisé. Par contre, vous ne pouvez pas infliger de dégâts supplémentaires si vous êtes désavantagé sur votre jet d\'attaque.'
        ]);
        Attack::insert([
            'name' => 'Tours de magie',
            'description'=> 'Vous connaissez main du mage, poigne électrique, prestidigitation et rayon de givre et vous pouvez les lancer à volonté.'
        ]);
        Attack::insert([
            'name' => 'Emplacements de sorts',
            'description'=> 'Vous possédez deux emplacements de sorts de niveau 1 que vous pouvez utiliser pour lancer vos sorts préparés.'
        ]);
        Attack::insert([
            'name' => 'Sorts préparés',
            'description'=> 'Vous préparez quatre sorts de niveau 1, choisis dans votre grimoire, que vous serez prêt à lancer.'
        ]);
        Attack::insert([
            'name' => 'Grimoire',
            'description'=> 'Vous possédez un grimoire contenant les sorts de niveau 1 suivants : armure du mage, bouclier, détection de la magie, mains brûlantes, projectile magique et sommeil. Ces sorts sont décrits dans le livret de règles.'
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

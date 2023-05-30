<?php

use App\Models\Spell;
use App\Models\SpellTag;
use App\Models\Tag;
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
        Schema::create('spell_tag', function (Blueprint $table) {
            $table->primary(['spell_id', 'tag_id']);
            $table->foreignIdFor(Spell::class)->constrained();
            $table->foreignIdFor(Tag::class)->constrained();
        });

        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'agrandissementrapetissement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'aide')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'aide')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'alarme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'allie-planaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'amelioration-de-caracteristique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'amelioration-de-caracteristique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'amitie-avec-les-animaux')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'animation-des-morts')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'animation-des-objets')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'anticipation-contingence')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'antidetection-non-detection')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'apaisement-des-emotions')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'apaisement-des-emotions')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'apparence-trompeuse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'appel-de-destrier-trouver-une-monture')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'appel-de-familier')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'appel-de-la-foudre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'appel-de-la-foudre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'arme-elementaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'arme-magique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'arme-spirituelle')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'arme-spirituelle')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'armure-dagathys')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'armure-dagathys')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'armure-dagathys')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'armure-dagathys')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'armure-du-mage')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'arret-du-temps')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'aspersion-acide')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'aspersion-acide')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'assassin-imaginaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'assassin-imaginaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'assassin-imaginaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'assistance')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'augure')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'aura-de-purete')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'aura-de-vie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'aura-de-vie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'aura-de-vitalite')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'aura-du-croise')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'aura-du-croise')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'aura-magique-de-nystul')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'aura-sacree')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bagou')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'baies-nourricieres')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'baies-nourricieres')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'balisage-rayon-tracant')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'balisage-rayon-tracant')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'balisage-rayon-tracant')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bannissement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'barriere-de-lames')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'barriere-de-lames')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'barriere-de-lames')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tranchants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'benediction')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'blessure')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'blessure')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bouche-magique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bouche-magique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bouclier')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bouclier-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bouclier-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bouclier-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bouclier-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bouclier-de-la-foi')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bouffee-de-poison')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bouffee-de-poison')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-poison')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'boule-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'boule-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'boule-de-feu-a-retardement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'boule-de-feu-a-retardement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'bourrasque')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'brume-mortelle-nuage-mortel')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'brume-mortelle-nuage-mortel')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-poison')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cage-de-force')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'caresse-du-vampire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'caresse-du-vampire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'caresse-du-vampire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'carquois-magique-vif-carquois')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cecitesurdite')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cercle-de-mort')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cercle-de-mort')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cercle-de-pouvoir')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cercle-de-teleportation')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cercle-magique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cercle-magique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cercle-magique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chaine-declairs')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chaine-declairs')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'champ-antimagie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'changement-de-forme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'changement-de-plan')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'charme-personne')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-aveuglant-frappe-aveuglante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-aveuglant-frappe-aveuglante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-aveuglant-frappe-aveuglante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-aveuglant-frappe-aveuglante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-calcinant-frappe-ardente')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-calcinant-frappe-ardente')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-calcinant-frappe-ardente')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-courrouce-frappe-colerique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-courrouce-frappe-colerique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-courrouce-frappe-colerique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-courrouce-frappe-colerique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-debilitant-frappe-assommante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-debilitant-frappe-assommante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-debilitant-frappe-assommante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-debilitant-frappe-assommante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-du-ban-frappe-du-bannissement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-du-ban-frappe-du-bannissement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-du-ban-frappe-du-bannissement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-du-ban-frappe-du-bannissement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-du-ban-frappe-du-bannissement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-revelateur-frappe-lumineuse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-revelateur-frappe-lumineuse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-revelateur-frappe-lumineuse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-revelateur-frappe-lumineuse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-tonitruant-frappe-tonitruante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-tonitruant-frappe-tonitruante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chatiment-tonitruant-frappe-tonitruante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tonnerre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chien-de-garde-de-mordenkainen')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chien-de-garde-de-mordenkainen')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'chien-de-garde-de-mordenkainen')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'clairvoyance')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'clairvoyance')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'clignotement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'clignotement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'clone')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'coffre-secret-de-leomund')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'colonne-de-flamme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'colonne-de-flamme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'colonne-de-flamme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'communication-a-distance-envoi-de-message')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'communication-avec-les-animaux')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'communication-avec-les-morts')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'communication-avec-les-plantes')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'communication-avec-les-plantes')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'communion')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'communion-avec-la-nature')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'comprehension-des-langues')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'compulsion')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cone-de-froid')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cone-de-froid')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'confusion')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'contact-avec-les-plans')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'contact-glacial')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'contact-glacial')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'contact-glacial')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'contagion')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'contamination')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'contamination')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'contamination')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'contamination')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'contresort')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'controle-de-leau')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'controle-du-climat')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'convocations-instantanees-de-drawmij')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'coquille-antivie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'corde-enchantee')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cordon-de-fleches')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'cordon-de-fleches')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'couleurs-dansantes')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'coup-au-but-viser-juste')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'couronne-du-dement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'creation')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'creation-de-mort-vivant')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'creation-de-mort-vivant')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'creation-de-nourriture-et-deau')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'creation-ou-destruction-deau')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'croissance-depines')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'croissance-depines')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'croissance-depines')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'croissance-vegetale')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'danse-irresistible-dotto')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'danse-irresistible-dotto')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'deblocage')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'decharge-occulte-explosion-occulte')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'decharge-occulte-explosion-occulte')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'dedale-labyrinthe')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'dedale-labyrinthe')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'deguisement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'demi-plan')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'desintegration')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'desintegration')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'detection-de-la-magie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'detection-de-linvisibilite-voir-linvisible')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'detection-des-pensees')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'detection-des-pieges-trouver-les-pieges')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'detection-du-bien-et-du-mal')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'detection-du-poison-et-des-maladies')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'disque-flottant-de-tenser')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'dissimulation-supreme-sequestration')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'dissipation-de-la-magie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'dissipation-du-bien-et-du-mal')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'divination')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'doigt-de-mort')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'doigt-de-mort')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'doigt-de-mort')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'domination-danimal')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'domination-danimal')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'domination-de-monstre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'domination-de-monstre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'domination-de-personne')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'domination-de-personne')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'don-des-langues-langues')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'double-illusoire-tromperie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'double-illusoire-tromperie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'doux-repos')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'druidisme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'duel-force')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'duel-force')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'eclair')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'eclair')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'eclat-du-soleil')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'eclat-du-soleil')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'eclat-du-soleil')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'embruns-prismatiques')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'embruns-prismatiques')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'embruns-prismatiques')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'embruns-prismatiques')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'embruns-prismatiques')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-poison')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'embruns-prismatiques')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'embruns-prismatiques')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'embruns-prismatiques')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'emprisonnement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'enchevetrement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'enchevetrement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'enchevetrement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'entrave-planaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'entrave-planaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'envoutement-discours-captivant')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'epee-de-mordenkainen')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'epee-de-mordenkainen')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'esprit-faible')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'esprit-faible')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'esprit-faible')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'esprit-impenetrable')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'esprits-gardiens')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'esprits-gardiens')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'esprits-gardiens')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'esprits-gardiens')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'esprits-gardiens')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'etrangete-ennemi-subconscient')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'etrangete-ennemi-subconscient')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'etrangete-ennemi-subconscient')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'eveil')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'eveil')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fabrication')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'faconnage-de-la-pierre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'faux-amis-amis')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'faux-amis-amis')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'faveur-divine')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'faveur-divine')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'feindre-la-mort-etat-cadaverique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'feindre-la-mort-etat-cadaverique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'festin-des-heros')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'festin-des-heros')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'flamme-eternelle')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'flamme-sacree')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'flamme-sacree')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'flammes-produire-une-flamme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'flammes-produire-une-flamme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fleau-dinsectes')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fleau-dinsectes')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fleau-dinsectes')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fleche-acide-de-melf')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fleche-acide-de-melf')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fleche-de-foudre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fleche-de-foudre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fleche-de-foudre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fletrissement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fletrissement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'flou')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'flou')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'force-fantasmagorique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'force-fantasmagorique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'force-fantasmagorique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'forme-etheree')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'forme-gazeuse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'forme-gazeuse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fou-rire-de-tasha')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fouet-epineux')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fouet-epineux')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'foulee-brumeuse-pas-brumeux')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fracassement-briser')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fracassement-briser')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tonnerre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'frappe-piegeuse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'frappe-piegeuse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'frappe-piegeuse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'fusion-dans-la-pierre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'gardien-de-la-foi')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'gardien-de-la-foi')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'gardien-de-la-foi')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'glissement-de-terrain-deplacer-la-terre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'globe-dinvulnerabilite')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'glyphe-de-garde')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'gourdin-magique-crosse-des-druides')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'graisse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'graisse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'grande-foulee')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'grele-depines')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'grele-depines')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'grele-depines')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'guerison')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'guerison-de-groupe')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'hate')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'herissement-de-projectiles-invocation-dun-tir-de-barrage')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'heroisme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'heroisme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'identification')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'illusion-mineure')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'illusion-programmee')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'image-majeure')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'image-miroir')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'image-miroir')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'image-projetee')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'image-silencieuse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'immobilisation-de-monstre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'immobilisation-de-personne')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'imprecation-fleau')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'injonction')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'insecte-geant')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'insecte-geant')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'interdiction')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'interdiction')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'interdiction')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'inversion-de-la-gravite')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invisibilite')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invisibilite-supreme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-danimaux')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-danimaux')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-de-celeste')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-de-celeste')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-delementaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-delementaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-delementaire-mineurs')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-delementaire-mineurs')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-detres-sylvestres')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-de-fee')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-de-fee')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-dune-volee-de-projectiles')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'invocation-dune-volee-de-projectiles')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'jeter-une-malediction-malediction')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'lame-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'lame-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'leger-comme-une-plume-feuille-morte')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'lenteur')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'lever-une-malediction-delivrance-des-maledictions')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'levitation')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'liane-avide')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'liane-avide')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'liberte-de-mouvement')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'lien-de-protection')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'lien-telepathique-de-rary')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'localisation-danimaux-ou-de-plantes')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'localisation-de-creature')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'localisation-dobjet')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'lueur-despoir')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'lueur-despoir')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'lueurs-feeriques')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'lumiere')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'lumiere-du-jour')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'lumieres-dansantes')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'main-de-bigby')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'main-de-bigby')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'main-de-bigby')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'main-de-bigby')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'main-du-mage')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'main-du-mage')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mains-brulantes')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mains-brulantes')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'malefice')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'malefice')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'malefice')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'manoir-somptueux-de-mordenkainen')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'marche-sur-londe')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'marque-du-chasseur')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mauvais-oeil')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'message')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'messager-animal')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'metal-brulant-chauffer-le-metal')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'metal-brulant-chauffer-le-metal')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'metal-brulant-chauffer-le-metal')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'metamorphose')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'metamorphose-animale-formes-animales')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'metamorphose-supreme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mirage')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'modification-dapparence')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'modification-de-memoire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'monture-fantome')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'moquerie-cruelle')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'moquerie-cruelle')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'moquerie-cruelle')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mot-de-guerison')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mot-de-guerison-de-groupe')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mot-de-pouvoir-etourdissant')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mot-de-pouvoir-guerisseur')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mot-de-pouvoir-mortel')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mot-de-retour')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'motif-hypnotique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-depines')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-depines')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-depines')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-de-force')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-de-glace')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-de-glace')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-de-glace')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-de-pierre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-de-vent')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-de-vent')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-de-vent')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-prismatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-prismatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-prismatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-prismatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-prismatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-prismatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-prismatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-prismatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-poison')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mur-prismatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'murmures-dissonants')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'murmures-dissonants')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'murmures-dissonants')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'mythes-et-legendes-legende')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'nappe-de-brouillard')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'nuage-incendiaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'nuage-incendiaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'nuage-incendiaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'nuage-nauseabond')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'nuee-de-dagues')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tranchants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'nuee-de-meteores')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'nuee-de-meteores')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'nuee-de-meteores')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'oeil-du-mage')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'oeil-du-mage')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'orbe-chromatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'orbe-chromatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'orbe-chromatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'orbe-chromatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'orbe-chromatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'orbe-chromatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tonnerre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'orientation-trouver-un-chemin')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'orientation-trouver-un-chemin')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'parole-divine')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'parole-divine')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'parole-divine')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'passage-par-les-arbres')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'passage-sans-trace')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'passe-muraille')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'pattes-daraignee')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'peau-decorce')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'peau-de-pierre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'petite-hutte-de-leomund')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'petite-hutte-de-leomund')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'petrification')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'petrification')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'poigne-electrique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'poigne-electrique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'poigne-electrique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'portail')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'portail')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'portail-arcanique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'porte-dimensionnelle')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'possession')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'premonition')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'prestidigitation')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'priere-de-guerison')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'projectile-magique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'projectile-magique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'projection-astrale')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'protection-contre-lenergie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'protection-contre-la-mort')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'protection-contre-le-bien-et-le-mal')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'protection-contre-le-poison')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'protection-contre-le-poison')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'protection-contre-les-armes')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'protections-et-sceaux')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'protections-et-sceaux')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'purification-de-la-nourriture-et-de-leau')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'quete-coercition-mystique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rappel-a-la-vie-relever-les-morts')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-affaiblissant')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-ardent')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-ardent')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-de-givre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-de-givre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-de-givre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-de-lune')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-de-lune')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-de-lune')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-de-soleil')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-de-soleil')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-de-soleil')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-empoisonne')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-empoisonne')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'rayon-empoisonne')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-poison')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'regeneration')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'reincarnation')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'reparation')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'repli-expeditif')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'represailles-infernales')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'represailles-infernales')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'repulsionattirance-aversionattirance')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'repulsionattirance-aversionattirance')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'resistance')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'respiration-aquatique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'restauration-partielle')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'restauration-supreme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'resurrection')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'resurrection-supreme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'revigorer-retour-a-la-vie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sanctification')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sanctification')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sanctification')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sanctification')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sanctuaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sanctuaire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sanctuaire-prive-de-mordenkainen')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sanctuaire-prive-de-mordenkainen')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'saut')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'scrutation')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sens-animal')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sens-animal')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'serviteur-invisible')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'silence')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'silence')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'simulacre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'simulacre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'simulacre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'simulacre-de-vie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'soin-des-blessures')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'soin-des-blessures-de-groupe')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sommeil')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sommeil')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'songe-reve')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'songe-reve')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'songe-reve')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'souhait')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sphere-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sphere-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sphere-glacee-dotiluke')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sphere-glacee-dotiluke')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sphere-glacee-dotiluke')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'sphere-resiliente-dotiluke')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'stabilisation-epargner-les-mourants')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'suggestion')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'suggestion')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'suggestion-de-groupe')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'suggestion-de-groupe')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'symbole')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'telekinesie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'telekinesie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'telepathie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'teleportation')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-de-grele')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-de-grele')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-de-grele')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-de-grele')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-de-neige')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-de-neige')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-vengeresse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-vengeresse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-vengeresse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-vengeresse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tonnerre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-vengeresse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-vengeresse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-vengeresse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tempete-vengeresse')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tenebres')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tentacules-dhadar')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tentacules-dhadar')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tentacules-dhadar')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tentacules-noirs-devard')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tentacules-noirs-devard')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tentacules-noirs-devard')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tentacules-noirs-devard')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'terrain-hallucinatoire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'terreur-peur')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'texte-illusoire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'texte-illusoire')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'thaumaturgie')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'toile-daraignee')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'toile-daraignee')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'trait-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'trait-de-feu')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'trait-ensorcele-carreau-ensorcele')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'trait-ensorcele-carreau-ensorcele')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'transport-vegetal-voie-vegetale')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tremblement-de-terre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tremblement-de-terre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tremblement-de-terre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tremblement-de-terre')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tsunami')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'tsunami')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'vague-destructrice')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'vague-destructrice')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'vague-destructrice')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tonnerre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'vague-destructrice')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'vague-destructrice')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'vague-tonnante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'vague-tonnante')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tonnerre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'vent-divin-marche-sur-le-vent')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'vent-divin-marche-sur-le-vent')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'verrou-magique')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'vision-dans-le-noir')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'vision-supreme')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'vol')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'voracite-dhadar-appetit-dhadar')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'voracite-dhadar-appetit-dhadar')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'voracite-dhadar-appetit-dhadar')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'zone-de-verite')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', 'zone-de-verite')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spell_tag');
    }
};

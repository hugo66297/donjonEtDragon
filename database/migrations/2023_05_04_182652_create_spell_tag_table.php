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
            'spell_id' => Spell::where('slug', '6')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '7')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '8')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '9')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '10')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '11')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '11')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '12')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '13')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '14')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '15')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '15')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '16')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '17')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '18')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '18')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '19')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '19')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '19')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '19')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '20')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '21')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '22')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '22')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '23')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '23')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '23')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '24')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '25')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '26')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '27')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '27')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '28')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '29')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '29')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '30')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '31')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '32')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '33')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '33')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '34')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '34')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '34')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '35')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '36')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '36')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '36')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tranchants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '37')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '38')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '38')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '39')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '39')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '40')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '41')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '41')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '41')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '41')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '42')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '43')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '43')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-poison')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '44')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '44')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '45')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '45')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '46')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '47')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '47')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-poison')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '48')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '49')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '49')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '49')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '50')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '51')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '52')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '52')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '53')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '54')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '55')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '55')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '55')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '56')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '56')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '57')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '58')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '59')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '60')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '61')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '61')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '61')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '61')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '62')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '62')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '62')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '63')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '63')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '63')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '63')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '64')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '64')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '64')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '64')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '65')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '65')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '65')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '65')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '65')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '66')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '66')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '66')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '66')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '67')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '67')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '67')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tonnerre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '68')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '68')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '68')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '69')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '69')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '70')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '70')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '71')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '72')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '73')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '73')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '73')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '74')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '75')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '76')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '77')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '77')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '78')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '79')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '80')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '81')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '82')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '82')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '83')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '84')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '85')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '85')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '85')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '86')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '87')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '87')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '87')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '87')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '88')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '89')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '90')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '91')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '92')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '93')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '94')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '94')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '95')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '96')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '97')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '98')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '99')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '99')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '100')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '101')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '102')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '102')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '102')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '103')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '104')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '104')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '105')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '106')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '106')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '107')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '107')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '108')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '109')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '110')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '110')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '111')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '112')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '113')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '114')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '115')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '116')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '117')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '118')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '119')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '120')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '121')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '122')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '122')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '122')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '123')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '123')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '124')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '124')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '125')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '125')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '126')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '127')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '127')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '128')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '129')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '130')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '130')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '131')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '131')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '132')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '132')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '132')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '133')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '133')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '133')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '133')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '133')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-poison')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '133')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '133')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '133')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '134')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '135')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '135')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '135')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '136')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '136')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '137')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '138')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '138')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '139')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '139')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '139')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '140')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '141')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '141')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '141')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '141')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '141')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '142')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '142')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '142')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '143')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '143')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '144')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '145')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '146')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '146')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '147')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '147')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '148')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '148')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '149')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '149')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '150')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '151')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '151')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '152')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '152')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '153')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '153')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '153')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '154')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '154')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '155')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '155')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '155')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '156')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '156')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '157')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '157')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '158')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '158')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '158')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '159')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '160')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '160')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '161')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '162')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '162')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '163')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '164')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '164')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tonnerre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '165')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '165')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '165')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '166')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '167')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '167')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '167')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '168')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '169')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '170')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '171')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '172')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '172')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '173')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '174')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '174')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '174')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '175')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '176')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '177')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '178')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '179')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '179')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '180')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '181')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '182')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '183')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '184')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '184')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '185')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '186')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '187')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '188')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '189')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '190')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '191')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '191')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '192')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '192')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '192')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '193')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '194')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '195')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '196')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '196')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '197')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '197')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '198')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '198')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '199')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '199')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '200')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '201')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '201')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '202')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '202')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '203')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '204')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '204')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '205')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '206')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '207')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '208')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '209')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '209')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '210')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '211')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '212')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '213')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '214')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '215')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '216')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '216')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '217')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '218')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '219')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '220')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '221')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '221')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '221')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '221')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '222')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '222')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '223')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '223')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '224')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '224')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '224')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '225')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '226')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '227')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '228')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '229')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '230')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '231')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '231')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '231')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '232')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '233')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '234')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '235')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '236')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '237')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '238')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '239')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '239')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '239')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '240')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '241')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '242')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '243')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '244')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '245')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '246')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '247')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '247')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '247')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-perforants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '248')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '248')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '248')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '249')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '250')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '250')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '250')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '251')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '252')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '252')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '252')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '253')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '253')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '253')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '253')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '253')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '253')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '253')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '253')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-poison')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '253')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '254')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '254')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '254')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '255')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '256')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '257')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '257')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '257')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '258')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '259')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tranchants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '260')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '260')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '260')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '261')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '261')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '262')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '262')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '262')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '262')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '262')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '262')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tonnerre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '263')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '263')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '264')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '264')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '264')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '265')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '266')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '267')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '268')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '269')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '270')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '271')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '271')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '272')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '272')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '273')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '273')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '273')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '274')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '274')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '275')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '276')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '277')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '278')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '279')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '280')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '281')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '281')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-force')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '282')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '283')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '284')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '285')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '286')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '286')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '287')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '288')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '288')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '289')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '290')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '291')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '292')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '293')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '293')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '294')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '294')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '294')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '295')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '295')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '295')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '296')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '296')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '296')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '297')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '297')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '297')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-poison')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '298')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '299')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '300')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '301')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '302')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '302')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '303')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '303')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '304')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '305')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '306')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '307')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '308')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '309')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '310')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '311')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '311')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '311')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '311')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '312')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '312')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '313')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '313')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '314')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '315')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '316')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '316')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '317')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '318')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '318')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '319')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '319')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '319')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '320')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '321')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '322')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '323')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '323')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '324')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '324')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '324')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-psychiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '325')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '326')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '326')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '327')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '327')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '327')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '328')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '329')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'soin')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '330')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '330')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '331')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '331')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '332')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'special')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '333')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '333')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'controle')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '334')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '335')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '336')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '336')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '337')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '337')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '337')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '337')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '338')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '338')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '339')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '339')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '339')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '339')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tonnerre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '339')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '339')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '339')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '339')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '340')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '341')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '341')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '341')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '342')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '342')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '342')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '342')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '343')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '344')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '345')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '345')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '346')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '347')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '347')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '348')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '348')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-feu')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '349')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '349')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-foudre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '350')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'invocation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '351')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '351')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '351')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '351')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '352')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '352')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-contondants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '353')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'debuff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '353')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '353')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tonnerre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '353')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-radiants')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '353')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-necrotiques')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '354')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '354')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-tonnerre')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '355')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '355')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'transformation')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '356')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'environement')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '357')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '358')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '359')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'buff')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '360')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'attaque')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '360')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-froid')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '360')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'degat-acide')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '361')->first()->getKey(),
            'tag_id' => Tag::where('slug', 'interaction')->first()->getKey(),
        ]);
        SpellTag::insert([
            'spell_id' => Spell::where('slug', '361')->first()->getKey(),
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
        Schema::dropIfExists('spell_tags');
    }
};

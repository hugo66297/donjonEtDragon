<?php

use App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 20);
            $table->string('slug');
            $table->string('tag_path', 200);
        });

        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts d\'acide',
            'slug' => 'degat-acide',
            'tag_path' => 'storage/img/tags/damage/acid.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts contondants',
            'slug' => 'degat-contondants',
            'tag_path' => 'storage/img/tags/damage/bludgeoning.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts de froid',
            'slug' => 'degat-froid',
            'tag_path' => 'storage/img/tags/damage/cold.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts de feu',
            'slug' => 'degat-feu',
            'tag_path' => 'storage/img/tags/damage/fire.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts de force',
            'slug' => 'degat-force',
            'tag_path' => 'storage/img/tags/damage/force.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégât de foudre',
            'slug' => 'degat-foudre',
            'tag_path' => 'storage/img/tags/damage/lightning.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts nécrotiques',
            'slug' => 'degat-necrotiques',
            'tag_path' => 'storage/img/tags/damage/necrotic.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts perforants',
            'slug' => 'degat-perforants',
            'tag_path' => 'storage/img/tags/damage/piercing.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégât de poison',
            'slug' => 'degat-poison',
            'tag_path' => 'storage/img/tags/damage/poison.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégât psychiques',
            'slug' => 'degat-psychiques',
            'tag_path' => 'storage/img/tags/damage/psychic.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégât radiants',
            'slug' => 'degat-radiants',
            'tag_path' => 'storage/img/tags/damage/radiant.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégât tranchants',
            'slug' => 'degat-tranchants',
            'tag_path' => 'storage/img/tags/damage/slashing.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégât de tonnerre',
            'slug' => 'degat-tonnerre',
            'tag_path' => 'storage/img/tags/damage/thunder.png'
        ]);
        /*--------------------------------------------------------------*/
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Attaque',
            'slug' => 'attaque',
            'tag_path' => 'storage/img/tags/type/attack.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Buff',
            'slug' => 'buff',
            'tag_path' => 'storage/img/tags/type/buff.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Debuff',
            'slug' => 'debuff',
            'tag_path' => 'storage/img/tags/type/debuff.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Soin',
            'slug' => 'soin',
            'tag_path' => 'storage/img/tags/type/heal.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Transformation',
            'slug' => 'transformation',
            'tag_path' => 'storage/img/tags/type/transformation.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Environement',
            'slug' => 'environement',
            'tag_path' => 'storage/img/tags/type/environment.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Invocation',
            'slug' => 'invocation',
            'tag_path' => 'storage/img/tags/type/invocation.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Interaction',
            'slug' => 'interaction',
            'tag_path' => 'storage/img/tags/type/interaction.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Contrôle',
            'slug' => 'controle',
            'tag_path' => 'storage/img/tags/type/control.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Spécial',
            'slug' => 'special',
            'tag_path' => 'storage/img/tags/type/special.png'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
};

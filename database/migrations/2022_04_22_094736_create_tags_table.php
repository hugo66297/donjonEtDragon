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
            $table->string('tag_path', 200);
        });

        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts d\'acide',
            'tag_path' => 'storage/img/tags/damage/acid.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts contondants',
            'tag_path' => 'storage/img/tags/damage/bludgeoning.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts de froid',
            'tag_path' => 'storage/img/tags/damage/cold.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts de feu',
            'tag_path' => 'storage/img/tags/damage/fire.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts de force',
            'tag_path' => 'storage/img/tags/damage/force.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégât de foudre',
            'tag_path' => 'storage/img/tags/damage/lightning.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts nécrotiques',
            'tag_path' => 'storage/img/tags/damage/necrotic.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégâts perforants',
            'tag_path' => 'storage/img/tags/damage/piercing.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégât de poison',
            'tag_path' => 'storage/img/tags/damage/poison.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégât psychiques',
            'tag_path' => 'storage/img/tags/damage/psychic.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégât radiants',
            'tag_path' => 'storage/img/tags/damage/radiant.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégât tranchants',
            'tag_path' => 'storage/img/tags/damage/slashing.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Dégât de tonnerre',
            'tag_path' => 'storage/img/tags/damage/thunder.png'
        ]);
        /*--------------------------------------------------------------*/
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Sort d\'attaque',
            'tag_path' => 'storage/img/tags/type/attack.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Sort de buff',
            'tag_path' => 'storage/img/tags/type/buff.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Sort de debuff',
            'tag_path' => 'storage/img/tags/type/debuff.png'
        ]);
        Tag::insert([
            'id' => Str::uuid(),
            'name' => 'Sort de soin',
            'tag_path' => 'storage/img/tags/type/heal.png'
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
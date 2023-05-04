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
        /*SpellTag::insert([
            'spell_id' => 1,
            'tag_id' => 1
        ]);*/
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

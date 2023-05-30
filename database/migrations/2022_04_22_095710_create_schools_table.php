<?php

use App\Models\School;
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
        Schema::create('schools', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 20);
            $table->string('slug');
        });
        School::insert([
            'id' => Str::uuid(),
            'name' => 'Abjuration',
            'slug' => 'abjuration'
        ]);
        School::insert([
            'id' => Str::uuid(),
            'name' => 'Invocation',
            'slug' => 'invocation'
        ]);
        School::insert([
            'id' => Str::uuid(),
            'name' => 'Enchantement',
            'slug' => 'enchantement'
        ]);
        School::insert([
            'id' => Str::uuid(),
            'name' => 'Nécromancie',
            'slug' => 'necromancie'
        ]);
        School::insert([
            'id' => Str::uuid(),
            'name' => 'Divination',
            'slug' => 'divination'
        ]);
        School::insert([
            'id' => Str::uuid(),
            'name' => 'Illusion',
            'slug' => 'illusion'
        ]);
        School::insert([
            'id' => Str::uuid(),
            'name' => 'Transmutation',
            'slug' => 'transmutation'
        ]);
        School::insert([
            'id' => Str::uuid(),
            'name' => 'Évocation',
            'slug' => 'evocation'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
};

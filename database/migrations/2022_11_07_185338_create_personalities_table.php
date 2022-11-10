<?php

use App\Models\Personality;
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
        Schema::create('personalities', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
        });
        Personality::insert([
            'name' => 'Traits de personnalité'
        ]);
        Personality::insert([
            'name' => 'Idéaux'
        ]);
        Personality::insert([
            'name' => 'Liens'
        ]);
        Personality::insert([
            'name' => 'Défauts'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personalities');
    }
};

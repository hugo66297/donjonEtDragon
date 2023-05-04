<?php

use App\Models\Character;
use App\Models\Utility;
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
        Schema::create('character_utility', function (Blueprint $table) {
            $table->primary(['character_id', 'utility_id']);
            $table->foreignIdFor(Character::class)->constrained();
            $table->foreignIdFor(Utility::class)->constrained();
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_utility');
    }
};

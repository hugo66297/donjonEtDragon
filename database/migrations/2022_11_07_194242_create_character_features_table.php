<?php

use App\Models\Character;
use App\Models\Feature;
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
        Schema::create('character_feature', function (Blueprint $table) {
            $table->primary(['character_id', 'feature_id']);
            $table->foreignIdFor(Character::class)->constrained();
            $table->foreignIdFor(Feature::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_feature');
    }
};

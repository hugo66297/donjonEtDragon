<?php

use App\Models\Alignment;
use App\Models\Background;
use App\Models\Category;
use App\Models\Goal;
use App\Models\Race;
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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)->constrained();
            $table->foreignIdFor(Race::class)->constrained();
            $table->foreignIdFor(Background::class)->constrained();
            $table->foreignIdFor(Alignment::class)->constrained();
            $table->foreignIdFor(Goal::class)->constrained();
            $table->text('character_past');
            $table->integer('passive_wisdom')->default(0);
            $table->integer('proficiency_bonus')->default(0);
            $table->integer('armor_class')->default(0);
            $table->integer('initiative')->default(0);
            $table->decimal('speed',4,2)->default(0);
            $table->integer('maximum_hp')->default(0);
            $table->string('hit_dic',191);
            $table->text('equipment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnages');
    }
};

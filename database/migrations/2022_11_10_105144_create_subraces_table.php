<?php

use App\Models\Race;
use App\Models\Subrace;
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
        Schema::create('subraces', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->text('description');
            $table->boolean('is_after');
            $table->foreignIdFor(Race::class)->constrained();
        });
        /*Subrace::insert([
            'name' => '',
            'description' => '',
            'is_after' => ''

         ]);*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subraces');
    }
};

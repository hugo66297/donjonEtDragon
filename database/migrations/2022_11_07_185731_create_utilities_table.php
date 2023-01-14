<?php

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
        Schema::create('utilities', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
        });
        Utility::insert([
            'name' => 'Maîtrises'
         ]);
         Utility::insert([
            'name' => 'Langues'
         ]);
         Utility::insert([
            'name' => 'Connaissance de la pierre'
         ]);
         Utility::insert([
            'name' => 'Expertise'
         ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilities');
    }
};

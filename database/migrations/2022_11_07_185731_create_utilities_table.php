<?php

use App\Models\Utility;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilities', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 191);
        });
        Utility::insert([
            'id' => Str::uuid(),
            'name' => 'Maîtrises'
        ]);
        Utility::insert([
            'id' => Str::uuid(),
            'name' => 'Langues'
        ]);
        Utility::insert([
            'id' => Str::uuid(),
            'name' => 'Connaissance de la pierre'
        ]);
        Utility::insert([
            'id' => Str::uuid(),
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

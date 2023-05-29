<?php

use App\Models\Weapon;
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
        Schema::create('weapons', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 191);
            $table->integer('atk_bonus');
            $table->string('damage_type', 191);
            $table->text('sub_info')->nullable();
        });
        Weapon::insert([
            'id' => Str::uuid(),
            'name' => 'Hache à deux mains',
            'atk_bonus' => 5,
            'damage_type' => '1d12 + 3 tranchants'
        ]);
        Weapon::insert([
            'id' => Str::uuid(),
            'name' => 'Javeline',
            'atk_bonus' => 5,
            'damage_type' => '1d6 + 3 perforants',
            'sub_info' => '<p>Vous pouvez lancer une javeline à une distance de 9 mètres, ou jusqu\'à 36 mètres en étant désavantagé lors du jet d\'attaque.</p>'
        ]);
        Weapon::insert([
            'id' => Str::uuid(),
            'name' => 'Marteau de guerre',
            'atk_bonus' => 4,
            'damage_type' => '1d8 + 2 contondants'
        ]);
        Weapon::insert([
            'id' => Str::uuid(),
            'name' => 'Hachette',
            'atk_bonus' => 4,
            'damage_type' => '1d6 + 2 tranchants',
            'sub_info' => '<p>Vous pouvez lancer une hachette à une distance de 6 mètres ou jusqu\'à 18 mètres en étant désavantagé lors du jet d\'attaque.</p>'
        ]);
        Weapon::insert([
            'id' => Str::uuid(),
            'name' => 'Épée courte',
            'atk_bonus' => 5,
            'damage_type' => '1d6 + 3 perforants'
        ]);
        Weapon::insert([
            'id' => Str::uuid(),
            'name' => 'Arc court',
            'atk_bonus' => 5,
            'damage_type' => '1d6 + 3 perforants',
            'sub_info' => '<p>Vous pouvez tirer avec votre arc court à une distance de 24 mètres, ou jusqu\'à 96 mètres en étant désavantagé lors du jet d\'attaque.</p>'
        ]);
        Weapon::insert([
            'id' => Str::uuid(),
            'name' => 'Épée courte',
            'atk_bonus' => 4,
            'damage_type' => '1d6 + 2 perforants'
        ]);
        Weapon::insert([
            'id' => Str::uuid(),
            'name' => 'Épée à deux mains',
            'atk_bonus' => 4,
            'damage_type' => '2d6 + 2 tranchants'
        ]);
        Weapon::insert([
            'id' => Str::uuid(),
            'name' => 'Arc long',
            'atk_bonus' => 7,
            'damage_type' => '1d8 + 3 perforants',
            'sub_info' => '<p>Vous pouvez utiliser votre arc long pour tirer jusqu\'à une distance de 45 mètres ou jusqu\'à 180 mètres en étant désavantagé lors du jet d\'attaque.</p>'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weapons');
    }
};

    <?php

    use App\Models\Spell;
    use App\Models\Category;
    use App\Models\SpellCategory;
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
            Schema::create('spell_categories', function (Blueprint $table) {
                $table->primary(['spell_id', 'category_id']);
                $table->foreignIdFor(Spell::class)->constrained();
                $table->foreignIdFor(Category::class)->constrained();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('spell_categories');
        }
    };

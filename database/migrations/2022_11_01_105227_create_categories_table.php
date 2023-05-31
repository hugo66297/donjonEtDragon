<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name');
            $table->string('slug');
            $table->text('picture_path');
            $table->text('description');
        });

        Category::insert([
            'id' => Str::uuid(),
            'name' => 'Barbare',
            'slug' => 'barbare',
            'picture_path' => 'storage/img/categories/barbarian.jpg',
            'description' => '<p>Tous les barbares ont beau être bien différents les uns des autres, ils sont tous définis par leur rage, par cette fureur immodérée, inextinguible et irréfléchie. Leur colère n\'est pas une simple émotion, c\'est la férocité d\'un prédateur acculé, les assauts implacables d\'une tempête hivernale, le bouillonnement de l\'écume marine.</p><p>Pour certains, la rage naît de la communion avec de féroces esprits animaux, d\'autres la tirent d\'un réservoir de colère rempli par un monde de souffrances... Mais pour chaque barbare, la rage est une puissance qui ne se contente pas de déclencher une véritable frénésie combattive, elle leur accorde aussi des réflexes fulgurants, une meilleure résilience et leur permet d\'accomplir des tours de force.</p>'
        ]);
        Category::insert([
            'id' => Str::uuid(),
            'name' => 'Barde',
            'slug' => 'barde',
            'picture_path' => 'storage/img/categories/bard.jpg',
            'description' => '<p>Érudit, scalde ou escroc, le barde tisse sa magie à travers ses paroles et sa musique, que ce soit pour inspirer ses alliés, démoraliser ses adversaires, manipuler les esprits, créer des illusions ou même refermer des plaies.</p>'
        ]);
        Category::insert([
            'id' => Str::uuid(),
            'name' => 'Clerc',
            'slug' => 'clerc',
            'picture_path' => 'storage/img/categories/cleric.jpg',
            'description' => '<p>Les clercs jouent les intermédiaires entre le monde des mortels et les lointains plans des dieux. Ils sont aussi variés que les divinités qu\'ils servent et s\'efforcent d\'incarner la volonté de leur dieu. Le clerc n\'est pas un ecclésiastique ordinaire, il est imprégné de magie divine.</p>'
        ]);
        Category::insert([
            'id' => Str::uuid(),
            'name' => 'Druide',
            'slug' => 'druide',
            'picture_path' => 'storage/img/categories/druid.jpg',
            'description' => '<p>Que les druides fassent appel aux forces élémentaires de la nature ou qu\'ils imitent les créatures du monde sauvage, ils incarnent la résilience de la nature, sa ruse et sa fureur. Ils ne se prétendent pas maîtres de la nature, ils se considèrent plutôt comme des extensions de son indomptable volonté.</p>'
        ]);
        Category::insert([
            'id' => Str::uuid(),
            'name' => 'Ensorceleur',
            'slug' => 'ensorceleur',
            'picture_path' => 'storage/img/categories/sorcerer.jpg',
            'description' => '<p>Les ensorceleurs exercent un droit de naissance sur l\'utilisation de la magie. Il leur vient de leur lignage exotique, d\'une influence issue d\'un autre monde ou encore d\'une exposition à des forces cosmiques inconnues. On ne peut pas étudier l\'art des ensorceleurs comme on étudierait un langage, pas plus qu\'on ne peut apprendre comment mener une vie légendaire. Personne ne choisit de devenir ensorceleur, c\'est le pouvoir qui choisit l\'ensorceleur. '
        ]);
        Category::insert([
            'id' => Str::uuid(),
            'name' => 'Guerrier',
            'slug' => 'guerrier',
            'picture_path' => 'storage/img/categories/fighter.jpg',
            'description' => '<p>les guerriers sont des membres de la classe la plus diversifiée des mondes de Dungeons & Dragons. Les chevaliers partis accomplir une quête, les seigneurs de guerre conquérants, les champions royaux, les soldats d\'élite, les mercenaires endurcis, les rois des bandits... En tant que guerriers, ils maîtrisent tous l\'art d\'utiliser les armures et les armes et connaissent toutes les astuces et ficelles du combat. Ils sont très familiers avec la mort, qu\'ils la donnent ou la regardent droit dans les yeux.</p>'
        ]);
        Category::insert([
            'id' => Str::uuid(),
            'name' => 'Magicien',
            'slug' => 'magicien',
            'picture_path' => 'storage/img/categories/wizard.jpg',
            'description' => '<p>Les magiciens sont les mages suprêmes, définis et unis en une même classe par les sorts qu\'ils sont capables de lancer. Ils puisent dans le tissu magique qui sous-tend le cosmos et génèrent des flammes explosives, des éclairs, de subtiles supercheries et de violents contrôles mentaux grâce à leurs incantations. Leur magie invoque des monstres issus d\'autres plans d\'existence, leur donne un aperçu du futur ou transforme les ennemis tombés en zombis. Les sorts les plus puissants sont capables de transformer une matière en une autre, de faire pleuvoir des météores ou d\'ouvrir des portails vers d\'autres mondes. '
        ]);
        Category::insert([
            'id' => Str::uuid(),
            'name' => 'Moine',
            'slug' => 'moine',
            'picture_path' => 'storage/img/categories/monk.jpg',
            'description' => '<p>Quelle que soit leur discipline de prédilection, tous les moines partagent une même capacité à rassembler par magie les énergies qui coulent dans leur corps. Qu\'ils les canalisent pour exécuter des prouesses martiales époustouflantes ou les concentrent plus discrètement au profit de leur défense et de leur vitesse, elles imprègnent tous leurs mouvements.</p>'
        ]);
        Category::insert([
            'id' => Str::uuid(),
            'name' => 'Occultiste',
            'slug' => 'occultiste',
            'picture_path' => 'storage/img/categories/warlock.jpg',
            'description' => '<p>Les occultistes cherchent les connaissances dissimulées dans la trame du multivers. Ils concluent des pactes avec de mystérieux êtres aux pouvoirs surnaturels pour générer des effets magiques subtils ou spectaculaires.</p><p>Ils puisent dans l\'antique savoir de créatures comme les aristocrates féeriques, les démons, les diables, les guenaudes ou les étranges entités du Royaume lointain pour percer les secrets de la magie et renforcer leurs pouvoirs.</p>'
        ]);
        Category::insert([
            'id' => Str::uuid(),
            'name' => 'Paladin',
            'slug' => 'paladin',
            'picture_path' => 'storage/img/categories/paladin.jpg',
            'description' => '<p>Quelles que soient leurs origines et leur mission, tous les paladins sont unis dans leur lutte contre les forces du mal. Que le paladin prête serment devant l\'autel d\'un dieu en présence d\'un prêtre, dans une clairière sacrée devant des esprits de la nature et des créatures féeriques ou dans un élan de chagrin et de désespoir avec les morts pour seuls témoins, ce serment est un lien puissant, une source d\'énergie qui transforme un combattant dévoué en champion béni.</p>'
        ]);
        Category::insert([
            'id' => Str::uuid(),
            'name' => 'Roublard',
            'slug' => 'roublard',
            'picture_path' => 'storage/img/categories/rogue.jpg',
            'description' => '<p>Les roublards comptent sur leurs compétences, leur discrétion et les points faibles de leurs ennemis pour prendre le dessus, quelle que soit la situation. Ils ont un don pour trouver la solution adaptée à chaque problème et possèdent les ressources et la polyvalence indispensables au succès de tout groupe d\'aventuriers.</p>'
        ]);
        Category::insert([
            'id' => Str::uuid(),
            'name' => 'Rôdeur',
            'slug' => 'rodeur',
            'picture_path' => 'storage/img/categories/ranger.jpg',
            'description' => '<p>Les rôdeurs montent une garde éternelle loin de l\'animation des villes et des villages, après les haies qui protègent les fermes les plus éloignées, au milieu des arbres des forêts denses ou au-delà de vastes plaines.</p>'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};

<?php

use App\Models\Race;
use App\Models\Subrace;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subraces', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 191)->nullable();
            $table->text('description');
            $table->boolean('is_after')->default(false);
            $table->foreignIdFor(Race::class)->constrained();
        });
        Subrace::insert([
            'id' => Str::uuid(),
            'description' => '<p>Vous éprouvez une insatiable soif de voyages. Grâce à votre espérance de vie très longue, vous pouvez passer des siècles à explorer et découvrir le monde. Vous aimez aussi développer vos talents d\'épéiste et votre puissance magique, ce que vous pouvez faire aisément en menant une vie d\'aventurier. Certains elfes peuvent se joindre à une rébellion contre un oppresseur, tandis que d\'autres préfèrent se faire les champions de causes morales.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Elfe')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'name' => 'Haut',
            'description' => '<p>En tant qu\'hauts-elfes vous avez l\'esprit vif et maîtrisez au moins les bases de la magie. On trouve quatres types de hauts-elfes. Les premiers sont hautains et secrets, ils sont convaincus d\'être supérieurs aux autres races et même aux autres elfes. Les seconds sont plus nombreux et plus amicaux, et on les trouve souvent parmi les humains et les autres races.</p><p>Les elfes du soleil (aussi appelés elfes d\'or ou elfes de l\'aube) ont la peau couleur de bronze et les cheveux cuivrés, noirs ou blonds tandis que leurs yeux sont dorés, argentés ou noirs. Les elfes de la lune (aussi appelés elfes d\'argent ou elfes gris) sont plus pâles, avec une peau d\'albâtre parfois teintée de bleu et des cheveux blanc-argenté, noirs ou bleus, bien que l\'on trouve assez fréquemment du blond, du brun et du roux. Leurs yeux sont verts ou bleus, pailletés d\'or.</p>',
            'is_after' => false,
            'race_id' => Race::where('name', 'Elfe')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'name' => 'Sylvestre',
            'description' => '<p>En tant qu\'elfe des bois (ou elfe sylvestre), vous avez des sens aiguisés et une excellente intuition. De plus, vos pieds agiles vous emportent rapidement et sans bruit au travers de votre forêt natale. Vous faites partie d\'un peuple isolationniste qui n\'accorde aucune confiance aux membres des races autres qu\'elfiques.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Elfe')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'name' => 'Noir (Drow)',
            'description' => '<p>Comme tout drow, vous êtes imprégné par la magie d\'Outreterre, ce royaume souterrain fais de merveilles et d\'horreurs presque inconnues à la surface. Les ombres restent votre domaine et vos aptitudes innées vous permettent d\'invoquer la lumière comme les ténèbres.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Elfe')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'description' => '<p>Vous aimez découvrir des nouveautés, même des choses simples comme un plat exotique ou un style de vêtement inconnu. Vous êtes prompts à éprouver de la pitié et détestez voir souffrir un être vivant. Vous êtes généreux et partagez volontiers ce que vous avez, même quand les temps sont durs.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Halfelin')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'name' => 'Pied-léger',
            'description' => '<p>En tant qu\'halfelin pied-léger, vous cacher est presque une seconde nature et vous n\'hésitez pas à vous dissimuler derrière d\'autres créatures pour échapper aux regards. Vous êtes d\'un naturel plutôt affable et sympathique. Vous êtes la variante racial la plus répandus et donc, la plus courante. Vous êtes plus portés sur le voyage que vos congénères et vous cohabitez généralement avec d\'autres races ou bien choisissez une vie nomade.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Halfelin')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'name' => 'Robuste',
            'description' => '<p>En tant qu\'halfelin robuste, vous êtes plus costaud que la moyenne et vous possédez une certaine résistance au poison. Certains disent que vous avez du sang nain dans les veines. Vous aimez faire la fête et appréciez boire une bonne bière en compagnie de vos amis dans une tavernes ou l\'on ne s\'entend même pas.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Halfelin')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'description' => '<p>En tant qu\'humains partant en quête d\'aventure, vous faites partie des membres les plus téméraires et ambitieux d\'une race déjà ambitieuse et téméraire. Vous cherchez à vous couvrir de gloire devant vos concitoyens en amassant puissance, richesses et célébrité. Plus que tout autre peuple, les humains ont tendance à se faire les champions de grandes causes plutôt que de territoires ou de groupes.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Humain')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'description' => '<p>Comme tout vos confrères nains, vous êtes loyal et determiné, fidèle à votre parole et résolu dans vos actes, parfois au point de vous comporter avec obstination. Vous avez le sens de la justice et avez bien du mal à oublier les torts qu\'on vous a causés. Et qui fait du tort à un nain fait du tort à son clan entier : si un nain part en quête de vengeance, c\'est tout le clan qui risque de prendre les armes à sa suite.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Nain')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'name' => 'des Collines',
            'description' => '<p>En tant que nain des collines, vous avez des sens aiguisés, une excellente intuition et une résistance remarquable. Vous habitez de lointains royaumes au sud et gardez généralement vos distances avec les humains.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Nain')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'name' => 'des Montagnes',
            'description' => '<p>En tant que nain des montagnes, vous êtes fort et robuste, habitué à mener une vie difficile dans des zones accidentées. Vous aimez les pierres précieuse, et, travailler au coeur de votre montagne à la recherche de richesse est loin d\'être une corvé sinon un objectif.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Nain')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'name' => 'Duergar',
            'description' => '<p>En tant que Duergar (ou nain gris), Vous vivez dans des villes nichées dans les entrailles de l\'Outreterre. En raison de siècles de captivité et de tourments endurés aux griffes des flagelleurs mentaux, vous disposez d\'aptitudes magiques innées. Certains d\'entre vous sont des esclavagistes aussi discrets que vicieux qui lancent des raids à la surface pour ramener des captifs à vendre aux autres races souterraines.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Nain')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'description' => '<p>Issus de deux mondes sans vraiment appartenir à aucun, vous avez héritez des meilleures qualités de vos parents humains et elfes : la curiosité, l\'inventivité et l\'ambition des humains, tempérées par le sens du raffinement, l\'amour de la nature et les goût artistiques des elfes. En tant que demi-elfe vous avez appris dès votre plus jeune âge à vous entendre avec tout le monde, à détourner l\'hostilité d\'autrui et à trouver un terrain d\'entente. Vous possédez la grâce des elfes sans leur attitude hautaine et l\'énergie des humains sans leur côté rustre et grossier. Voilà pourquoi vous faites un excellent ambassadeur et intermédiaire.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Demi-Elfe')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'description' => '<p>C\'est Gruumsh, le dieu borgne de la guerre et de la fureur, qui a créé les orcs. Ainsi, même ceux qui se détournent de son culte ne peuvent se soustraire complètement à son influence. Il en va de même pour vous, bien que votre sang humain limite l\'impact de votre héritage orc, vous pouvez entendre les murmures de Gruumsh dans vos rêves, des murmures qui vous incite à libérer la rage qui bouillonne en vous. Vous pouvez aussi ressentir l\'exaltation de Gruumsh quand vous rejoignez la mêlée lors d\'une bataille. À vous de choisir si vous exultez avec lui ou frissonnez de peur et de dégoût. Vous n\'êtes pas maléfiques de nature, mais le mal rôde en votre cœur, que vous décidiez de l\'embrasser ou de vous rebeller contre lui.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Demi-Orc')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'description' => '<p>En tant que drakéide, vous êtes animée d\'une volonté continue de vous améliorer qui se traduit au niveau de l\'autonomie dont vous faite preuve. Vous appréciez par-dessus tout les talents et l\'excellence. Vous détestez échouer et fournissez des efforts acharnés avant de vous avouer vaincu. L\'objectif de toute votre vie consiste à atteindre la maîtrise parfaite d\'un talent particulier. Si un membre d\'une autre race partage cette recherche de perfection, il n\'aura aucun mal à gagner votre respect. Comme tout drakéide vous vous efforcez d\'être autonome, cependant vous reconnaissez qu\'un peu d\'aide peut être la bienvenue dans des situations difficiles.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Drakéide')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'description' => '<p>En tant que gnomes, vous êtes curieux et impulsifs et vous avez décidé de mener une carrière d\'aventurier pour découvrir le monde ou par amour de l\'exploration. Amateur de gemmes et autres objets de qualité, vous considérez l\'aventure comme le chemin le plus rapide (malgré ses dangers) vers la richesse. Quelles que soient vos motivations, vous prenez autant de plaisir dans votre vie d\'aventurier que dans toute autre activité, parfois au grand dam de vos camarades d\'aventure.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Gnome')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'name' => 'des forêts',
            'description' => '<p>En tant que gnomes des forêts, vous avez un don naturel pour les illusions et disposez d\'une rapidité et d\'une discrétion naturelles. vous vous rassemblez en communautés secrètes au cœur des forêts et recourez aux illusions et aux supercheries pour vous cacher de tout ce qui pourrait constituer une menace et pour masquer votre fuite si quelqu\'un venait à vous découvrir. Cependant, vous vous montrez amicaux envers les autres habitants affables des bois et considérez les elfes et les fées bienveillant(e)s comme vos meilleurs alliés. Vous vous liez aussi d\'amitié avec de petits animaux des bois qui vous transmettent des informations sur les éventuels dangers rôdant sur vos terres.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Gnome')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'name' => 'des roches',
            'description' => '<p>En tant que gnomes des roches, vous êtes naturellement plus inventifs et résistants que les autres gnomes. Le bricolage est votre grande spécialité car de votre esprit résulte toutes sortes d\'objets qui peux être fabriqué avec de simple matériaux.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Gnome')->first()->getKey()
        ]);
        Subrace::insert([
            'id' => Str::uuid(),
            'description' => '<p>Comme tous les tieffelins, vous n\'avez pas de foyer. Vous êtes concient que vous devez vous forger votre propre place dans le monde et qu\'il vous faudra être forts pour survivre. Vous ne faites pas facilement confiance à ceux qui prétendent être vos amis, mais quand vos camarades prouvent qu\'ils vous font confiance, vous savez leur rendre la pareille. Et quand finalement vous accordez votre loyauté à quelqu\'un, c\'est un ami fidèle et un allié à vie.</p>',
            'is_after' => true,
            'race_id' => Race::where('name', 'Tieffelin')->first()->getKey()
        ]);
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

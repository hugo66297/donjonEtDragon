<?php

use App\Models\Ability;
use App\Models\Adventure;
use App\Models\Alignment;
use App\Models\Attack;
use App\Models\Background;
use App\Models\Category;
use App\Models\Character;
use App\Models\Coin;
use App\Models\Feature;
use App\Models\Goal;
use App\Models\Skill;
use App\Models\Subrace;
use App\Models\Utility;
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
        $heroes = [
            Character::create([
                'category_id' => Category::where('slug', 'guerrier')->first()->getKey(),
                'background_id' => Background::where('name', 'Noble')->first()->getKey(),
                'subrace_id' => Subrace::select('subraces.*')
                    ->join('races', 'races.id', 'subraces.race_id')
                    ->whereNull('subraces.name')
                    ->where('races.name', 'Humain')
                    ->first()->getKey(),
                'alignment_id' => Alignment::where('name', 'Loyal Neutre')->first()->getKey(),
                'goal_id' => Goal::where('name', 'civiliser Phandaline.')->first()->getKey(),
                'passive_wisdom' => 13,
                'proficiency_bonus' => 2,
                'armor_class' => 17,
                'initiative' => -1,
                'speed' => 9,
                'maximum_hp' => 12,
                'hit_dice' => '1d10',
                'personality_traits' => 'Je sais flatter les gens afin qu\'ils se sentent merveilleux et importants. Je n\'aime pas me salir et je préférerais mourir que d\'être vu dans un logement qui ne sied pas à mon rang.',
                'ideals' => 'Responsabilité. Il est du devoir des nobles de protéger le peuple, pas de l\'exploiter.',
                'bonds' => 'Ma hache à deux mains est un héritage familial. Il s\'agit, de loin, de mon bien le plus précieux.',
                'flaws' => 'J\'ai du mal à résister à l\'attrait de la richesse et plus particulièrement de l\'or. Si je deviens assez riche, je pourrai retrouver la place qui m\'est due.',
                'character_past' => '<p>Vous venez d\'une famille habituée à la richesse, au pouvoir et aux privilèges. Au faîte de la gloire de Padhiver, vos parents étaient le comte et la comtesse de la Colline de Corlinn, un grand domaine situé dans les collines au nord-est de la ville. Mais le mont Hautchaud est entré en éruption il y a trente ans, a dévasté Padhiver et rayé la Colline de Corlinn de la carte. Au lieu de grandir dans un domaine, vous avez été élevé dans une petite mais confortable demeure d\'Eauprofonde. Maintenant que vous êtes adulte, vous savez que vous n\'aurez en guise d\'héritage qu\'un titre vide de sens et pas grand-chose d\'autre.</p>',
                'equipment' => '<p>Une cotte de mailles*, une hache à deux mains, 3 javelines, un sac-à-dos, une couverture, une boîte à amadou, 2 jours de rations, une outre, de beaux habits, une chevalière, une lettre de noblesse</p><p>*Quand vous portez cette armure, vous êtes désavantagé lors de vos tests de Dextérité (Discrétion).</p>'
            ]),
            Character::create([
                'category_id' => Category::where('slug', 'clerc')->first()->getKey(),
                'background_id' => Background::where('name', 'Soldat')->first()->getKey(),
                'subrace_id' => Subrace::select('subraces.*')
                    ->join('races', 'races.id', 'subraces.race_id')
                    ->where('subraces.name', 'des Collines')
                    ->where('races.name', 'Nain')
                    ->first()
                    ->getKey(),
                'alignment_id' => Alignment::where('name', 'Neutre Bon')->first()->getKey(),
                'goal_id' => Goal::where('name', 'donner une leçon aux Fers Rouges.')->first()->getKey(),
                'passive_wisdom' => 13,
                'proficiency_bonus' => 2,
                'armor_class' => 18,
                'initiative' => -1,
                'speed' => 7.5,
                'maximum_hp' => 11,
                'hit_dice' => '1d8',
                'personality_traits' => 'Je suis toujours poli et respectueux. Je ne fais pas confiance à mon instinct, donc je préfère attendre de voir comment les autres agissent.',
                'ideals' => 'Respect. Les gens méritent d\'être traités avec dignité et courtoisie.',
                'bonds' => 'J\'ai trois cousins (Gundren, Tharden et Nundro Cherchepierre), qui sont mes amis et des membres respectés de mon clan.',
                'flaws' => 'Je me demande secrètement si les dieux se soucient vraiment des affaires des mortels.',
                'character_past' => '<p>Vous avez suivi une formation de soldat sur l\'île de Mintarn. Vous avez ensuite rejoint une compagnie de mercenaires servant à la fois d\'armée et de milice en la ville de Padhiver. Cependant, les fréquents abus d\'autorité de vos camarades auprès des gens qu\'ils étaient censés protéger n\'ont pas tardé à vous faire perdre vos illusions. Récemment, vous avez fini par craquer et vous avez désobéi à un ordre afin de suivre votre conscience. En guise de punition, vous avez été mis à pied. Vous conservez néanmoins votre rang et vos connexions avec les mercenaires. Vous vous consacrez depuis lors à votre divinité.</p>',
                'equipment' => '<p>Une cotte de mailles*, un bouclier, un marteau de guerre, 2 hachettes, un symbole sacré, un sac-à-dos, un pied de-biche, un marteau, 10 pitons, 10 torches, une boîte à amadou, 10 jours de rations, une outre, 15 mètres de corde de chanvre, des outils de maçon, une dague récupérée sur un ennemi mort comme trophée, un jeu de cartes, des habits courants, une sacoche, un insigne (sergent)</p><p>* Quand vous portez cette armure, vous êtes désavantagé lors de vos tests de Dextérité (Discrétion).<p>'
            ]),
            Character::create([
                'category_id' => Category::where('slug', 'roublard')->first()->getKey(),
                'background_id' => Background::where('name', 'Criminel')->first()->getKey(),
                'subrace_id' => Subrace::select('subraces.*')
                    ->join('races', 'races.id', 'subraces.race_id')
                    ->where('subraces.name', 'Pied-léger')
                    ->where('races.name', 'Halfelin')
                    ->first()
                    ->getKey(),
                'alignment_id' => Alignment::where('name', 'Neutre')->first()->getKey(),
                'goal_id' => Goal::where('name', 'vous venger.')->first()->getKey(),
                'passive_wisdom' => 13,
                'proficiency_bonus' => 2,
                'armor_class' => 14,
                'initiative' => 3,
                'speed' => 7.5,
                'maximum_hp' => 9,
                'hit_dice' => '1d8',
                'personality_traits' => 'Je n\'ai jamais de plan, mais je n\'ai pas mon pareil pour improviser. Le meilleur moyen de me convaincre de faire quelque chose c\'est de me dire que je n\'en suis pas capable.',
                'ideals' => 'Les gens. Ma loyauté va à mes amis, pas à un idéal. Tous les autres peuvent aller faire un tour sur le Styx, en ce qui me concerne.',
                'bonds' => 'Quelline Feuille d\'Aune, ma tante, a une ferme à Phandaline. Je lui donne toujours une portion de mon argent mal acquis.',
                'flaws' => 'Ma tante ne doit jamais apprendre ce que j\'ai fait quand j\'étais membre des Fers Rouges.',
                'character_past' => '<p>La ville de Phandaline est construite sur les ruines d\'une ancienne cité, abandonnée pendant cinq siècles, jusqu\'à ce que de courageux colons entreprennent de la reconstruire, il y a quelques années. Des rumeurs parlant d\'or et de platine dans les collines voisines vous ont à votre tour poussé à rejoindre Phandaline. Non pas pour gagner honnêtement votre vie, mais plutôt pour voler ceux qui sont tombés sur un filon. Vous avez rejoint un gang appelé les Fers Rouges et gagné décemment votre vie en tant que cambrioleur, homme de main ou receleur.</p><p>Cependant, vous vous êtes fait un ennemi parmi les Fers Rouges et cette personne vous a récemment fait un sale coup. Sur ses allégations, le chef des Fers Rouges, un magicien appelé Bâton de Verre, a tenté de vous faire tuer. Vous avez échappé de justesse à la mort, en remerciant Tymora, la déesse de la bonne fortune, de votre chance. Vous avez quitté Phandaline, presque sans un sou et avec seulement sur vous les outils de votre profession.</p>',
                'equipment' => '<p>Une épée courte, un arc court, 20 flèches, une armure de cuir, des outils de voleur, un sac-à-dos, une cloche, 5 bougies, un pied-de-biche, un marteau, 10 pitons, 15 mètres de corde de chanvre, une lanterne à capote, 2 flasques d\'huile, 5 jours de rations, une boîte à amadou, une outre, des habits courants de couleur sombre avec une capuche, une sacoche.</p>'
            ]),
            Character::create([
                'category_id' => Category::where('slug', 'magicien')->first()->getKey(),
                'background_id' => Background::where('name', 'Acolyte')->first()->getKey(),
                'subrace_id' => Subrace::select('subraces.*')
                    ->join('races', 'races.id', 'subraces.race_id')
                    ->where('subraces.name', 'Haut')
                    ->where('races.name', 'Elfe')
                    ->first()
                    ->getKey(),
                'alignment_id' => Alignment::where('name', 'Chaotique Bon')->first()->getKey(),
                'goal_id' => Goal::where('name', 'consacrer l\'autel profané.')->first()->getKey(),
                'passive_wisdom' => 13,
                'proficiency_bonus' => 2,
                'armor_class' => 12,
                'initiative' => 2,
                'speed' => 9,
                'maximum_hp' => 8,
                'hit_dice' => '1d6',
                'personality_traits' => 'J\'utilise des mots compliqués pour me donner des airs d\'érudit. Par ailleurs, j\'ai passé tellement de temps au temple que je n\'ai pas l\'habitude d\'interagir avec les gens de manière informelle.',
                'ideals' => 'Savoir. La voie menant au pouvoir et au perfectionnement de soi passe par le savoir.',
                'bonds' => 'Le livre que je transporte avec moi contient le fruit de tout mon labeur. Je ne connais aucun coffre assez sûr pour l\'y laisser.',
                'flaws' => 'Je suis prêt à tout pour découvrir des secrets historiques qui m\'aideront dans mes recherches.',
                'character_past' => '<p>Votre vie est toute entière dédiée à Oghma, le dieu omniscient de la connaissance, et vous avez passé des années à apprendre les secrets du multivers.</p>',
                'equipment' => '<p>Une épée courte, une sacoche à composantes, un grimoire, un sac-àdos, une bouteille d\'encre, un porteplume, 10 feuilles de parchemin, un petit couteau, un traité d\'histoire, un symbole sacré, un livre de prières, des vêtements courants, une sacoche.</p>'
            ]),
            Character::create([
                'category_id' => Category::where('slug', 'guerrier')->first()->getKey(),
                'background_id' => Background::where('name', 'Héros du Peuple')->first()->getKey(),
                'subrace_id' => Subrace::select('subraces.*')
                    ->join('races', 'races.id', 'subraces.race_id')
                    ->whereNull('subraces.name')
                    ->where('races.name', 'Humain')
                    ->first()
                    ->getKey(),
                'alignment_id' => Alignment::where('name', 'Loyal Bon')->first()->getKey(),
                'goal_id' => Goal::where('name', 'chasser le dragon.')->first()->getKey(),
                'passive_wisdom' => 13,
                'proficiency_bonus' => 2,
                'armor_class' => 14,
                'initiative' => 3,
                'speed' => 9,
                'maximum_hp' => 12,
                'hit_dice' => '1d10',
                'personality_traits' => 'Quand je prends une décision, je m\'y tiens. J\'utilise des mots compliqués pour avoir l\'air plus intelligent.',
                'ideals' => 'Sincérité. Il est inutile que je prétende être ce que je ne suis pas.',
                'bonds' => 'Un jour, Arbrefoudre redeviendra une communauté prospère et une statue à mon effigie se trouvera sur la grand place.',
                'flaws' => 'Je suis convaincu qu\'une grande destinée m\'attend et je refuse de reconnaître mes faiblesses et la possibilité que j\'échoue.',
                'character_past' => '<p>Vos parents vivaient dans le prospère village d\'Arbrefoudre, à l\'est de la cité de Padhiver et à l\'orée du bois du même nom. Mais quand le proche mont Hautchaud est entré en éruption il y a trente ans, alors que vous n\'étiez encore qu\'un bébé, vos parents ont fui. Votre famille est par la suite allée de village en village, en trouvant du travail comme serviteurs ou manœuvres où ils le pouvaient dans la région.</p><p>Vous avez passé les dernières années à travailler comme gardien et docker dans le port animé de la ville de Padhiver. Cependant, il vous semble, à vous et à ceux qui vous entourent, que vous êtes destiné à bien plus. Il y a quelques temps, vous vous êtes dressé contre un violent capitaine de navire et, depuis, les autres dockers vous tiennent en haute estime. Un jour, vous révélerez qui vous êtes vraiment : un héros.</p>',
                'equipment' => '<p>Une armure de cuir, un arc long, 20 flèches, une épée à deux mains, un sac-à-dos, un sac de couchage, une gamelle, une boîte à amadou, 10 torches, 10 jours de rations, une outre, 15 mètres de corde de chanvre, des outils de charpentier, une pelle, un pot en fer, des habits courants, une sacoche.</p>'
            ]),
        ];

        $strengthAbility = Ability::where('slug', 'force')->first();
        $dexterityAbility = Ability::where('slug', 'dexterite')->first();
        $constitutionAbility = Ability::where('slug', 'constitution')->first();
        $smartAbility = Ability::where('slug', 'intelligence')->first();
        $wisdomAbility = Ability::where('slug', 'sagesse')->first();
        $charismAbility = Ability::where('slug', 'charisme')->first();

        $abilities = [
            [
                ['charactable_id' => $strengthAbility->getKey(), 'ability_value' => 16],
                ['charactable_id' => $dexterityAbility->getKey(), 'ability_value' => 9],
                ['charactable_id' => $constitutionAbility->getKey(), 'ability_value' => 15],
                ['charactable_id' => $smartAbility->getKey(), 'ability_value' => 11],
                ['charactable_id' => $wisdomAbility->getKey(), 'ability_value' => 13],
                ['charactable_id' => $charismAbility->getKey(), 'ability_value' => 14],
            ],
            [
                ['charactable_id' => $strengthAbility->getKey(), 'ability_value' => 14],
                ['charactable_id' => $dexterityAbility->getKey(), 'ability_value' => 8],
                ['charactable_id' => $constitutionAbility->getKey(), 'ability_value' => 15],
                ['charactable_id' => $smartAbility->getKey(), 'ability_value' => 10],
                ['charactable_id' => $wisdomAbility->getKey(), 'ability_value' => 16],
                ['charactable_id' => $charismAbility->getKey(), 'ability_value' => 12],
            ],
            [
                ['charactable_id' => $strengthAbility->getKey(), 'ability_value' => 8],
                ['charactable_id' => $dexterityAbility->getKey(), 'ability_value' => 16],
                ['charactable_id' => $constitutionAbility->getKey(), 'ability_value' => 12],
                ['charactable_id' => $smartAbility->getKey(), 'ability_value' => 13],
                ['charactable_id' => $wisdomAbility->getKey(), 'ability_value' => 10],
                ['charactable_id' => $charismAbility->getKey(), 'ability_value' => 16],
            ],
            [
                ['charactable_id' => $strengthAbility->getKey(), 'ability_value' => 10],
                ['charactable_id' => $dexterityAbility->getKey(), 'ability_value' => 15],
                ['charactable_id' => $constitutionAbility->getKey(), 'ability_value' => 14],
                ['charactable_id' => $smartAbility->getKey(), 'ability_value' => 16],
                ['charactable_id' => $wisdomAbility->getKey(), 'ability_value' => 12],
                ['charactable_id' => $charismAbility->getKey(), 'ability_value' => 8],
            ],
            [
                ['charactable_id' => $strengthAbility->getKey(), 'ability_value' => 14],
                ['charactable_id' => $dexterityAbility->getKey(), 'ability_value' => 16],
                ['charactable_id' => $constitutionAbility->getKey(), 'ability_value' => 15],
                ['charactable_id' => $smartAbility->getKey(), 'ability_value' => 11],
                ['charactable_id' => $wisdomAbility->getKey(), 'ability_value' => 13],
                ['charactable_id' => $charismAbility->getKey(), 'ability_value' => 9],
            ],
        ];
        $savingThrows = [
            [
                ['charactable_id' => $strengthAbility->savingThrow->getKey(), 'is_proficient' => true],
                ['charactable_id' => $dexterityAbility->savingThrow->getKey()],
                ['charactable_id' => $constitutionAbility->savingThrow->getKey(), 'is_proficient' => true],
                ['charactable_id' => $smartAbility->savingThrow->getKey()],
                ['charactable_id' => $wisdomAbility->savingThrow->getKey()],
                ['charactable_id' => $charismAbility->savingThrow->getKey()],
            ],
            [
                ['charactable_id' => $strengthAbility->savingThrow->getKey()],
                ['charactable_id' => $dexterityAbility->savingThrow->getKey()],
                ['charactable_id' => $constitutionAbility->savingThrow->getKey()],
                ['charactable_id' => $smartAbility->savingThrow->getKey()],
                ['charactable_id' => $wisdomAbility->savingThrow->getKey(), 'is_proficient' => true],
                ['charactable_id' => $charismAbility->savingThrow->getKey(), 'is_proficient' => true],
            ],
            [
                ['charactable_id' => $strengthAbility->savingThrow->getKey()],
                ['charactable_id' => $dexterityAbility->savingThrow->getKey(), 'is_proficient' => true],
                ['charactable_id' => $constitutionAbility->savingThrow->getKey()],
                ['charactable_id' => $smartAbility->savingThrow->getKey(), 'is_proficient' => true],
                ['charactable_id' => $wisdomAbility->savingThrow->getKey()],
                ['charactable_id' => $charismAbility->savingThrow->getKey()],
            ],
            [
                ['charactable_id' => $strengthAbility->savingThrow->getKey()],
                ['charactable_id' => $dexterityAbility->savingThrow->getKey()],
                ['charactable_id' => $constitutionAbility->savingThrow->getKey()],
                ['charactable_id' => $smartAbility->savingThrow->getKey(), 'is_proficient' => true],
                ['charactable_id' => $wisdomAbility->savingThrow->getKey(), 'is_proficient' => true],
                ['charactable_id' => $charismAbility->savingThrow->getKey()],
            ],
            [
                ['charactable_id' => $strengthAbility->savingThrow->getKey(), 'is_proficient' => true],
                ['charactable_id' => $dexterityAbility->savingThrow->getKey()],
                ['charactable_id' => $constitutionAbility->savingThrow->getKey(), 'is_proficient' => true],
                ['charactable_id' => $smartAbility->savingThrow->getKey()],
                ['charactable_id' => $wisdomAbility->savingThrow->getKey()],
                ['charactable_id' => $charismAbility->savingThrow->getKey()],
            ],
        ];
        $skills = [
            [
                ['charactable_id' => Skill::whereName('Acrobaties')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Arcanes')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Athlétisme')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Discrétion')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Dressage')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Escamotage')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Histoire')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Intimidation')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Investigation')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Médecine')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Nature')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Perception')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Perspicacité')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Persuasion')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Religion')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Représentation')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Supercherie')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Survie')->first()->getKey()],
            ],
            [
                ['charactable_id' => Skill::whereName('Acrobaties')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Arcanes')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Athlétisme')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Discrétion')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Dressage')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Escamotage')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Histoire')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Intimidation')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Investigation')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Médecine')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Nature')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Perception')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Perspicacité')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Persuasion')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Religion')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Représentation')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Supercherie')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Survie')->first()->getKey()],
            ],
            [
                ['charactable_id' => Skill::whereName('Acrobaties')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Arcanes')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Athlétisme')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Discrétion')->first()->getKey(), 'is_proficient' => true, 'other_modifier_skill' => 2],
                ['charactable_id' => Skill::whereName('Dressage')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Escamotage')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Histoire')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Intimidation')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Investigation')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Médecine')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Nature')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Perception')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Perspicacité')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Persuasion')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Religion')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Représentation')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Supercherie')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Survie')->first()->getKey()],
            ],
            [
                ['charactable_id' => Skill::whereName('Acrobaties')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Arcanes')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Athlétisme')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Discrétion')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Dressage')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Escamotage')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Histoire')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Intimidation')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Investigation')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Médecine')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Nature')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Perception')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Perspicacité')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Persuasion')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Religion')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Représentation')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Supercherie')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Survie')->first()->getKey()],
            ],
            [
                ['charactable_id' => Skill::whereName('Acrobaties')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Arcanes')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Athlétisme')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Discrétion')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Dressage')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Escamotage')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Histoire')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Intimidation')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Investigation')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Médecine')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Nature')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Perception')->first()->getKey(), 'is_proficient' => true],
                ['charactable_id' => Skill::whereName('Perspicacité')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Persuasion')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Religion')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Représentation')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Supercherie')->first()->getKey()],
                ['charactable_id' => Skill::whereName('Survie')->first()->getKey(), 'is_proficient' => true],
            ],
        ];
        $weapons = [
            [
                Weapon::whereName('Hache à deux mains')->whereAtkBonus(5)->whereDamageType('1d12 + 3 tranchants')->first()->getKey(),
                Weapon::whereName('Javeline')->whereAtkBonus(5)->whereDamageType('1d6 + 3 perforants')->first()->getKey(),
            ],
            [
                Weapon::whereName('Marteau de guerre')->whereAtkBonus(4)->whereDamageType('1d8 + 2 contondants')->first()->getKey(),
                Weapon::whereName('Hachette')->whereAtkBonus(4)->whereDamageType('1d6 + 2 tranchants')->first()->getKey(),
            ],
            [
                Weapon::whereName('Épée courte')->whereAtkBonus(5)->whereDamageType('1d6 + 3 perforants')->first()->getKey(),
                Weapon::whereName('Arc court')->whereAtkBonus(5)->whereDamageType('1d6 + 3 perforants')->first()->getKey(),
            ],
            [
                Weapon::whereName('Épée courte')->whereAtkBonus(4)->whereDamageType('1d6 + 2 perforants')->first()->getKey(),
            ],
            [
                Weapon::whereName('Épée à deux mains')->whereAtkBonus(4)->whereDamageType('2d6 + 2 tranchants')->first()->getKey(),
                Weapon::whereName('Arc long')->whereAtkBonus(7)->whereDamageType('1d8 + 3 perforants')->first()->getKey(),
            ],
        ];
        $attacks = [
            [],
            [
                ['attack_id' => Attack::whereName('Tours de magie')->first()->getKey(), 'other_description' => 'Vous connaissez flamme sacrée, lumière et thaumaturgie et vous pouvez les lancer à volonté. Ces sorts sont décrits dans le livret de règles.'],
                ['attack_id' => Attack::whereName('Emplacements de sorts')->first()->getKey(), 'other_description' => 'Vous possédez deux emplacements de sorts de niveau 1 que vous pouvez utiliser pour lancer vos sorts préparés.'],
                ['attack_id' => Attack::whereName('Sorts préparés')->first()->getKey(), 'other_description' => 'Vous préparez quatre sorts de niveau 1, choisis dans la liste des sorts de clerc du livret de règles, que vous serez prêt à lancer. Par ailleurs, vous avez toujours deux sorts de domaine préparés : bénédiction et soin des blessures.'],
            ],
            [
                ['attack_id' => Attack::whereName('Attaque sournoise')->first()->getKey()],
            ],
            [
                [
                    'attack_id' => Attack::whereName('Tours de magie')->first()->getKey(),
                    'other_description' => 'Vous connaissez main du mage, poigne électrique, prestidigitation et rayon de givre et vous pouvez les lancer à volonté.'
                ],
                [
                    'attack_id' => Attack::whereName('Emplacements de sorts')->first()->getKey(),
                    'other_description' => 'Vous possédez deux emplacements de sorts de niveau 1 que vous pouvez utiliser pour lancer vos sorts préparés.'
                ],
                [
                    'attack_id' => Attack::whereName('Sorts préparés')->first()->getKey(),
                    'other_description' => 'Vous préparez quatre sorts de niveau 1, choisis dans votre grimoire, que vous serez prêt à lancer.'
                ],
                [
                    'attack_id' => Attack::whereName('Grimoire')->first()->getKey(),
                    'other_description' => 'Vous possédez un grimoire contenant les sorts de niveau 1 suivants : armure du mage, bouclier, détection de la magie, mains brûlantes, projectile magique et sommeil. Ces sorts sont décrits dans le livret de règles.'
                ],
            ],
            [],
        ];
        $features = [
            [
                Feature::whereName('Second souffle')->first()->getKey(),
                Feature::whereName('Style de combat (défense)')->first()->getKey(),
                Feature::whereName('Privilégié')->first()->getKey(),
            ],
            [
                Feature::whereName('Caractéristique d\'incantation (sagesse)')->first()->getKey(),
                Feature::whereName('Disciple de la vie')->first()->getKey(),
                Feature::whereName('Vision dans le noir')->first()->getKey(),
                Feature::whereName('Résistance naine')->first()->getKey(),
                Feature::whereName('Sergent mercenaire')->first()->getKey(),
            ],
            [
                Feature::whereName('Argot des voleurs')->first()->getKey(),
                Feature::whereName('Chanceux')->first()->getKey(),
                Feature::whereName('Brave')->first()->getKey(),
                Feature::whereName('Agilité halfeline')->first()->getKey(),
                Feature::whereName('Discrétion naturelle')->first()->getKey(),
                Feature::whereName('Contact criminel')->first()->getKey(),
            ],
            [
                Feature::whereName('Caractéristique d\'incantation (intelligence)')->first()->getKey(),
                Feature::whereName('Restauration magique')->first()->getKey(),
                Feature::whereName('Vision dans le noir')->first()->getKey(),
                Feature::whereName('Ascendance féerique')->first()->getKey(),
                Feature::whereName('Transe')->first()->getKey(),
                Feature::whereName('Abri des croyants')->first()->getKey(),
            ],
            [
                Feature::whereName('Second souffle')->first()->getKey(),
                Feature::whereName('Style de combat (archerie)')->first()->getKey(),
                Feature::whereName('Hospitalité rustique')->first()->getKey(),
            ],
        ];
        $utilities = [
            [
                ['utility_id' => Utility::whereName('Maîtrises')->first()->getKey(), 'description' => 'Toutes les armures, les boucliers, les armes courantes, les armes de guerre, les jeux de cartes.'],
                ['utility_id' => Utility::whereName('Langues')->first()->getKey(), 'description' => 'Commun, draconique, nain'],
            ],
            [
                ['utility_id' => Utility::whereName('Maîtrises')->first()->getKey(), 'description' => 'Toutes les armures, les boucliers, toutes les armes courantes, les haches d’armes, les hachettes, les marteaux légers, les marteaux de guerre, les jeux de cartes, les outils de maçon, les véhicules terrestres.'],
                ['utility_id' => Utility::whereName('Langues')->first()->getKey(), 'description' => 'Commun, nain'],
                ['utility_id' => Utility::whereName('Connaissance de la pierre')->first()->getKey(), 'description' => 'Quand vous faites un test d’Intelligence (Histoire) relatif à l’origine d’un travail de maçonnerie, vous considérez que vous possédez la maîtrise de la compétence Histoire et vous ajoutez le double de votre bonus de maîtrise au résultat du test au lieu de votre bonus de maîtrise normal.'],
            ],
            [
                ['utility_id' => Utility::whereName('Maîtrises')->first()->getKey(), 'description' => '. Armures légères, armes courantes, arbalètes de poing, épées longues, rapières, épées courtes, outils de voleurs, jeux de cartes, outils de charpentier. '],
                ['utility_id' => Utility::whereName('Langues')->first()->getKey(), 'description' => 'Commun, halfelin'],
                ['utility_id' => Utility::whereName('Expertise')->first()->getKey(), 'description' => 'Quand vous faites un test de Dextérité (Discrétion) ou un test en utilisant des outils de voleur, votre bonus de maîtrise est doublé. Cet avantage est déjà intégré à votre bonus de compétence de Discrétion.'],
            ],
            [
                ['utility_id' => Utility::whereName('Maîtrises')->first()->getKey(), 'description' => 'Dagues, fléchettes, arbalètes légères, arcs longs, épées longues, bâtons, arcs courts, épées courtes, frondes.'],
                ['utility_id' => Utility::whereName('Langues')->first()->getKey(), 'description' => 'Commun, elfe, draconique, nain, gobelin'],
            ],
            [
                ['utility_id' => Utility::whereName('Maîtrises')->first()->getKey(), 'description' => 'Toutes les armures, les boucliers, les armes courantes, les armes de guerre, les outils de charpentier, les véhicules terrestres.'],
                ['utility_id' => Utility::whereName('Langues')->first()->getKey(), 'description' => 'Commun, elfe'],
            ],
        ];
        $coins = [
            [
                ['coin_id' => Coin::whereAbbreviation('PC')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PA')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PE')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PO')->first()->getKey(), 'quantity' => 25],
                ['coin_id' => Coin::whereAbbreviation('PP')->first()->getKey()],
            ],
            [
                ['coin_id' => Coin::whereAbbreviation('PC')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PA')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PE')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PO')->first()->getKey(), 'quantity' => 10],
                ['coin_id' => Coin::whereAbbreviation('PP')->first()->getKey()],
            ],
            [
                ['coin_id' => Coin::whereAbbreviation('PC')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PA')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PE')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PO')->first()->getKey(), 'quantity' => 15],
                ['coin_id' => Coin::whereAbbreviation('PP')->first()->getKey()],
            ],
            [
                ['coin_id' => Coin::whereAbbreviation('PC')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PA')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PE')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PO')->first()->getKey(), 'quantity' => 5],
                ['coin_id' => Coin::whereAbbreviation('PP')->first()->getKey()],
            ],
            [
                ['coin_id' => Coin::whereAbbreviation('PC')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PA')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PE')->first()->getKey()],
                ['coin_id' => Coin::whereAbbreviation('PO')->first()->getKey(), 'quantity' => 10],
                ['coin_id' => Coin::whereAbbreviation('PP')->first()->getKey()],
            ],
        ];

        foreach ($heroes as $index => $hero) {
            $hero->abilities()->sync($abilities[$index]);
            $hero->savingThrows()->sync($savingThrows[$index]);
            $hero->skills()->sync($skills[$index]);
            $hero->weapons()->sync($weapons[$index]);
            $hero->attacks()->sync($attacks[$index]);
            $hero->features()->sync($features[$index]);
            $hero->utilities()->sync($utilities[$index]);
            $hero->coins()->sync($coins[$index]);
            $hero->adventures()->sync(Adventure::whereAbbreviation('LMOP')->first());
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

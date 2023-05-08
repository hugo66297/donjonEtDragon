<?php

use App\Models\Feature;
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
        Schema::create('features', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 191);
            $table->text('description');
        });
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Second souffle',
            'description' => 'Vous possédez une réserve limitée d\'endurance dans laquelle puiser afin de vous protéger. Lors de votre tour, vous pouvez utiliser une action bonus pour regagner un nombre de points de vie égal à 1d10 + votre niveau de guerrier. Une fois que vous avez utilisé cette aptitude, vous devez finir un court ou un long repos avant de pouvoir l\'utiliser de nouveau.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Style de combat (défense)',
            'description' => 'Quand vous portez une armure, vous gagnez un bonus de +1 à votre CA. Ce bonus est déjà inclus dans votre CA.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Privilégié',
            'description' => 'Grâce à votre noble naissance, les gens ont tendance à penser le meilleur de vous. Vous êtes le bienvenu dans la haute société et les gens se disent que vous êtes tout à fait en droit de vous trouver où bon vous semble. Les gens du commun font de leur mieux pour vous satisfaire et éviter votre déplaisir et les gens de haute naissance vous traitent comme un membre de leur sphère sociale. Si besoin, vous pouvez obtenir une audience auprès d\'un noble local.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Caractéristique d\'incantation (sagesse)',
            'description' => 'Vous utilisez la Sagesse comme caractéristique d\'incantation pour lancer vos sorts. Le DD du jet de sauvegarde pour résister aux sorts que vous lancez est de 13. Quand vous attaquez à l\'aide d\'un sort, votre bonus d\'attaque est de +5. Reportez-vous au livret de règles pour plus d\'explications sur l\'utilisation de la magie.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Disciple de la vie',
            'description' => 'Vos sorts de soins sont particulièrement efficaces. À chaque fois que vous utilisez un sort de niveau 1 ou plus afin de redonner des points de vie à une créature, celle-ci regagne un nombre de points de vie supplémentaires égal à 2 + le niveau du sort.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Vision dans le noir',
            'description' => 'Dans un rayon de 18 mètres, vous pouvez voir dans une zone de lumière faible comme s\'il s\'agissait d\'une zone de lumière vive et dans l\'obscurité comme s\'il s\'agissait d\'une zone de lumière faible. Par contre, vous ne distinguez pas les couleurs dans l\'obscurité, seulement des nuances de gris'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Résistance naine',
            'description' => 'Vous êtes avantagé sur vos jets de sauvegarde contre le poison et vous possédez une résistance contre les dégâts de poison.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Ténacité naine',
            'description' => 'Votre nombre maximum de points de vie augmente de 1. Il augmente de nouveau de 1 chaque fois que vous gagnez un niveau (inclus dans le profil).'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Sergent mercenaire',
            'description' => 'Vous étiez un sous-officier parmi les mercenaires de Mintarn, un grade qui vous apporte encore quelques avantages. Même si vous n\'êtes pas en service actif, les soldats de Mintarn reconnaissent encore votre autorité et votre influence et s\'en remettent à vous s\'ils sont d\'un grade inférieur. Vous pouvez ainsi réquisitionner temporairement un peu de matériel ordinaire et des chevaux. Vous avez aussi accès aux camps et aux forteresses des mercenaires de Mintarn.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Argot des voleurs',
            'description' => 'Vous avez appris l\'argot des voleurs, un mélange secret de dialecte, de jargon et de codes qui vous permet de cacher des messages dans des conversations en apparence innocentes. De plus, vous comprenez un ensemble de signes et de symboles qui permettent de transmettre des messages courts et simples, qui indiquent par exemple si une zone est dangereuse, si un trésor se trouve à proximité, si des personnes qui habitent dans le coin sont des proies faciles ou si elles accepteront de cacher des voleurs en fuite.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Chanceux',
            'description' => 'Quand vous faites un 1 avec le d20 d\'un jet d\'attaque, d\'un test de caractéristique ou d\'un jet de sauvegarde, vous pouvez relancer le dé. Mais vous devez utiliser le nouveau résultat du jet.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Brave',
            'description' => 'Vous êtes avantagé sur les jets de sauvegarde contre l\'état terrorisé.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Agilité halfeline',
            'description' => 'Vous pouvez traverser n\'importe quel emplacement occupé par une créature d\'au moins une catégorie de taille de plus que vous.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Discrétion naturelle',
            'description' => 'Vous pouvez tenter de vous cacher même quand vous êtes seulement dissimulé par une créature d\'au moins une catégorie de taille de plus que vous.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Contact criminel',
            'description' => 'Vous possédez un contact fiable et digne de confiance qui vous sert d\'agent de liaison avec un réseau de criminels. Vous savez comment lui transmettre des messages, même sur grande distance, et comment en recevoir de sa part, c\'est-àdire que vous connaissez les messagers locaux, les chefs de caravane corrompus et les marins douteux susceptibles de transmettre ces messages pour votre compte. Vous pouvez transmettre des informations secrètes ou des marchandises volées à votre contact en échange d\'argent ou d\'informations.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Caractéristique d\'incantation (intelligence)',
            'description' => 'La caractéristique d\'incantation qui vous permet de lancer des sorts de magicien est l\'Intelligence. Le DD d\'un jet de sauvegarde pour résister à un sort que vous lancez est 13. Votre bonus d\'attaque quand vous lancez un sort d\'attaque est de +5. Reportez-vous au livret de règles pour plus d\'explications sur l\'utilisation de la magie.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Restauration magique',
            'description' => 'Vous avez appris comment regagner une partie de votre énergie magique en étudiant votre grimoire. Une fois par jour, à la fin d\'un court repos, vous pouvez récupérer des emplacements de sorts utilisés. Le niveau total de ces emplacements de sort doit être inférieur ou égal à la moitié de votre niveau de magicien (arrondi à l\'entier supérieur).'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Ascendance féerique',
            'description' => 'Vous êtes avantagé sur les jets de sauvegarde contre l\'effet charmé et vous ne pouvez être contraint à dormir par la magie.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Transe',
            'description' => 'Les elfes n\'ont pas besoin de dormir. À la place, ils passent 4 heures par jour dans un état de méditation profonde, tout en restant semi-conscients et bénéficient des avantages conférés à un humain par 8 heures de sommeil.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Abri des croyants',
            'description' => 'En tant que serviteur d\'Oghma, vous êtes respecté par ceux qui partagent votre foi. Vous pouvez accomplir les cérémonies religieuses liées à votre déité. Vous et vos compagnons d\'aventure pouvez recevoir des soins gratuits dans les temples, autels et autres endroits dédiés à Oghma. Ceux qui partagent votre religion peuvent aussi vous donner (mais seulement à vous) de quoi mener un train de vie modeste. Vous avez aussi des contacts au temple d\'Oghma à Neverwinter où vous avez un logement. Quand vous résidez à Neverwinter, vous pouvez demander l\'assistance des prêtres, dans la mesure où cela ne les met pas en danger.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Style de combat (archerie)',
            'description' => 'Vous gagnez un bonus de +2 aux jets d\'attaque quand vous attaquez avec des armes à distance. Ce bonus est déjà inclus dans vos statistiques d\'attaques avec votre arc long.'
        ]);
        Feature::insert([
            'id' => Str::uuid(),
            'name' => 'Hospitalité rustique',
            'description' => 'Comme vous avez grandi parmi les gens du peuple, vous vous intégrez parfaitement à leur compagnie. Tant que vous n\'avez pas prouvé que vous êtes un danger pour eux, ils vous offrent un endroit où vous cacher, vous reposer ou récupérer. Ils vous protègent contre la loi ou toute personne qui vous recherche, bien qu\'ils refusent de risquer leur vie pour vous.'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('features');
    }
};

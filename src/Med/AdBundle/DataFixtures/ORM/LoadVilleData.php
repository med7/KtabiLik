<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mohammed
 * Date: 31/12/13
 * Time: 01:12
 * To change this template use File | Settings | File Templates.
 */

namespace Med\AdBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Med\AdBundle\Entity\Ville;
use Med\AdBundle\Entity\Region;
use Med\AdBundle\Entity\Categorie;


class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $ville_1 = new Ville();
        $ville_2 = new Ville();

        $region = new Region();


        $region->setNom('Grand Casablanca');
        $ville_1->setNom('Casablanca');
        $ville_2->setNom('Mohammédia');
            $ville_1->setRegion($region);
            $ville_2->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);
            $manager->persist($ville_2);


        $ville_1 = new Ville();
        $ville_2 = new Ville();

        $region = new Region();
        $region->setNom('Rabat Salé Zemmour Zaer');
        $ville_1->setNom('Rabat');
        $ville_2->setNom('Salé');
            $ville_1->setRegion($region);
            $ville_2->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);
            $manager->persist($ville_2);

        $ville_1 = new Ville();
        $ville_2 = new Ville();

        $region = new Region();
        $region->setNom('Oriental');
        $ville_1->setNom('Nador');
        $ville_2->setNom('Oujda');
            $ville_1->setRegion($region);
            $ville_2->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);
            $manager->persist($ville_2);

        $ville_1 = new Ville();
        $ville_2 = new Ville();

        $region = new Region();
        $region->setNom('Taza Al-Hoceima Taounat');
        $ville_1->setNom('Al-Hoceima');
            $ville_1->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);

        $ville_1 = new Ville();
        $ville_2 = new Ville();

        $region = new Region();
        $region->setNom('Tanger Tétouan');
        $ville_1->setNom('Tanger');
        $ville_2->setNom('Tétouan');
            $ville_1->setRegion($region);
            $ville_2->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);
            $manager->persist($ville_2);


        $ville_1 = new Ville();
        $ville_2 = new Ville();

        $region = new Region();
        $region->setNom('Fés Boulmane');
        $ville_1->setNom('Fès');
            $ville_1->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);

        $ville_1 = new Ville();
        $ville_2 = new Ville();

        $region = new Region();
        $region->setNom('Gherb Chrarda');
        $ville_1->setNom('Kénitra');
            $ville_1->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);


        $ville_1 = new Ville();
        $ville_2 = new Ville();

        $region = new Region();
        $region->setNom('Meknès Tafilelt');
        $ville_1->setNom('Meknès');
            $ville_1->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);



        $ville_1 = new Ville();
        $ville_2 = new Ville();

        $region = new Region();
        $region->setNom('Chaouia Ourdigha');
        $ville_1->setNom('Settat');
        $ville_2->setNom('Khouribga');
            $ville_1->setRegion($region);
            $ville_2->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);
            $manager->persist($ville_2);


        $ville_1 = new Ville();
        $ville_2 = new Ville();

        $region = new Region();
        $region->setNom('Tadla Azilal');
        $ville_1->setNom('Beni Mellal');
            $ville_1->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);


        $ville_1 = new Ville();
        $ville_2 = new Ville();

        $region = new Region();
        $region->setNom('Doukkala Abda');
        $ville_1->setNom('El Jadida');
        $ville_2->setNom('Safi');
            $ville_1->setRegion($region);
            $ville_2->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);
            $manager->persist($ville_2);

        $ville_1 = new Ville();
        $region = new Region();
        $region->setNom('Marrakech Tansifet AlHaouz');
        $ville_1->setNom('Marrakech');
            $ville_1->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);


        $ville_1 = new Ville();

        $region = new Region();
        $region->setNom('Souss Massa Darâa');
        $ville_1->setNom('Agadir');
            $ville_1->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);


        $ville_1 = new Ville();
        $region = new Region();
        $region->setNom('Lâayoune Boujdour Sakia Al-Hamra');
        $ville_1->setNom('Lâayoune');
            $ville_1->setRegion($region);
            $manager->persist($region);
            $manager->persist($ville_1);

        $region = new Region();
        $region->setNom('Guelmim Essemara');
            $manager->persist($region);

        $region = new Region();
        $region->setNom('Oued Dahab Lagouira');
            $manager->persist($region);

        $categorie = new Categorie();
        $categorie->setNom('Romans');
        $manager->persist($categorie);
        $categorie = new Categorie();
        $categorie->setNom('BD/Mangas');
        $manager->persist($categorie);
        $categorie = new Categorie();
        $categorie->setNom('Jeunesse');
        $manager->persist($categorie);
        $categorie = new Categorie();
        $categorie->setNom('Policiers/Thrillers');
        $manager->persist($categorie);
        $categorie = new Categorie();
        $categorie->setNom('Sciences humaines');
        $manager->persist($categorie);
        $categorie = new Categorie();
        $categorie->setNom('Histoire/Politique');
        $manager->persist($categorie);
        $categorie = new Categorie();
        $categorie->setNom('Santé/bien-être');
        $manager->persist($categorie);
        $categorie = new Categorie();
        $categorie->setNom('Cuisine');
        $manager->persist($categorie);
        $categorie = new Categorie();
        $categorie->setNom('Art/Cinéma/Musique');
        $manager->persist($categorie);
        $categorie = new Categorie();
        $categorie->setNom('Tourisme/Voyages');
        $manager->persist($categorie);
        $categorie = new Categorie();
        $categorie->setNom('Scolaire/Universitaire');
        $manager->persist($categorie);
        $categorie = new Categorie();
        $categorie->setNom('Presse/Revues');
        $manager->persist($categorie);

        $manager->flush();
    }
}

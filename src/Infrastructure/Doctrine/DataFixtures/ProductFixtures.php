<?php

namespace App\Infrastructure\Doctrine\DataFixtures;

use App\Infrastructure\Doctrine\Entity\DoctrineProduct;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Ramsey\Uuid\Uuid;

/**
 * Class ProductFixtures
 * @package App\Infrastructure\Doctrine\DataFixtures
 */
class ProductFixtures extends Fixture
{
    /**
     * @param  ObjectManager  $manager
     */
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $products = [];

        for ($i = 0; $i < 4; $i++) {
            $products[$i] = new DoctrineProduct();
            $products[$i]->setId(Uuid::uuid4());
            $products[$i]->setName($faker->word);
            $products[$i]->setDescription($faker->paragraph(5, true));
            $products[$i]->setPrice($faker->randomFloat(2, 1, 200));
            $products[$i]->setImage('https://via.placeholder.com/1200x720');

            $manager->persist($products[$i]);
        }
        $manager->flush();
    }
}

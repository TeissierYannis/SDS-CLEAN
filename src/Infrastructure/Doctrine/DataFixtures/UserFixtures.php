<?php

namespace App\Infrastructure\Doctrine\DataFixtures;

use App\Infrastructure\Doctrine\Entity\DoctrineArticle;
use App\Infrastructure\Doctrine\Entity\DoctrineCategory;
use App\Infrastructure\Doctrine\Entity\DoctrineUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Ramsey\Uuid\Uuid;

/**
 * Class UserFixtures
 * @package App\Infrastructure\Doctrine\DataFixtures
 */
class UserFixtures extends Fixture
{
    /**
     * @param  ObjectManager  $manager
     */
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $users = [];

        $firstUser = new DoctrineUser();
        $firstUser->setId(Uuid::uuid4());
        $firstUser->setPseudo('admin');
        $firstUser->setEmail('admin@admin.com');
        $firstUser->setPassword(password_hash('password', PASSWORD_ARGON2I));
        $firstUser->setIsNewsletterRegistered(true);
        $firstUser->setRoles(['ROLE_ADMIN']);

        $manager->persist($firstUser);

        for ($i = 0; $i < 20; $i++) {
            $users[$i] = new DoctrineUser();
            $users[$i]->setId(Uuid::uuid4());
            $users[$i]->setPseudo($faker->name());
            $users[$i]->setEmail($faker->email);
            $users[$i]->setPassword(password_hash('password', PASSWORD_ARGON2I));
            $users[$i]->setIsNewsletterRegistered($faker->boolean(50));
            $users[$i]->setRoles([$faker->randomElement(['ROLE_USER', 'ROLE_REDACTOR']), 1]);

            $manager->persist($users[$i]);
        }

        $categories = [];
        for ($i = 0; $i < 5; $i++) {
            $categories[$i] = new DoctrineCategory();
            $categories[$i]->setId(Uuid::uuid4());
            $categories[$i]->setTitle($faker->sentence(2));

            $manager->persist($categories[$i]);
        }

        $articles = [];
        for ($i = 0; $i < 30; $i++) {
            $articles[$i] = new DoctrineArticle();
            $articles[$i]->setId(Uuid::uuid4());
            $articles[$i]->setTitle($faker->sentence('8'));
            $articles[$i]->setContent($faker->sentence(600));
            $articles[$i]->setCategory($faker->randomElement($categories));
            $articles[$i]->setCreatedAt($faker->dateTime);
            $articles[$i]->setRedactor($faker->randomElement($users));
            $manager->persist($articles[$i]);
        }

        $manager->flush();
    }
}

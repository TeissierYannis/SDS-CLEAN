<?php

namespace App\Infrastructure\Doctrine\DataFixtures;

use App\Infrastructure\Doctrine\Entity\DoctrineArticle;
use App\Infrastructure\Doctrine\Entity\DoctrineCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Ramsey\Uuid\Uuid;

/**
 * Class ArticleFixtures
 * @package App\Infrastructure\Doctrine\DataFixtures
 */
class ArticleFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $category = new DoctrineCategory();
        $category->setId(Uuid::uuid4());
        $category->setTitle('My category');

        $manager->persist($category);
        $manager->flush();

        $article = new DoctrineArticle();
        $article->setId(Uuid::uuid4());
        $article->setTitle('My article');
        $article->setContent('My content');
        $article->setCategory($category);

        $manager->persist($article);
        $manager->flush();
    }
}

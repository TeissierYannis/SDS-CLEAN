<?php

namespace App\Infrastructure\Adapter\Repository;

use App\Infrastructure\Doctrine\Entity\DoctrineArticle;
use App\Infrastructure\Doctrine\Entity\DoctrineCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Gateway\ArticleGateway;

/**
 * Class ArticleRepository
 * @package App\Infrastructure\Adapter\Repository
 */
class ArticleRepository extends ServiceEntityRepository implements ArticleGateway
{
    /**
     * ArticleRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoctrineArticle::class);
    }

    /**
     * @param Article $article
     * @throws ORMException
     */
    public function create(Article $article): void
    {
        $doctrineArticle = new DoctrineArticle();
        $doctrineArticle->setId($article->getId());
        $doctrineArticle->setTitle($article->getTitle());
        $doctrineArticle->setContent($article->getContent());

        $category = $this->_em->find(DoctrineCategory::class, $article->getCategory()->getId());

        if (is_null($category)) {
            $category = new DoctrineCategory();

            $category->setId($article->getCategory()->getId());
            $category->setTitle($article->getCategory()->getTitle());

            $this->_em->persist($category);
            $this->_em->flush();
        }

        $doctrineArticle->setCategory($category);

        $this->_em->persist($doctrineArticle);
        $this->_em->flush();
    }
}

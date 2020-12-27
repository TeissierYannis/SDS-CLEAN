<?php

namespace App\Infrastructure\Adapter\Repository;

use App\Infrastructure\Doctrine\Entity\DoctrineArticle;
use App\Infrastructure\Doctrine\Entity\DoctrineCategory;
use Assert\InvalidArgumentException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Symfony\Component\HttpFoundation\Response;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Gateway\CategoryGateway;

/**
 * Class ArticleRepository
 * @package App\Infrastructure\Adapter\Repository
 */
class CategoryRepository extends ServiceEntityRepository implements CategoryGateway
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
     * @param Category $category
     * @throws ORMException .
     * @throws OptimisticLockException
     * @throws Exception
     */
    public function create(Category $category): void
    {

        $repo = $this->_em->getRepository(DoctrineCategory::class);

        if (!empty($repo->findBy(['title' => $category->getTitle()]))) {
            throw new Exception('This category already exists.');
        }

        $doctrineCategory = new DoctrineCategory();
        $doctrineCategory->setId($category->getId());
        $doctrineCategory->setTitle($category->getTitle());

        $this->_em->persist($doctrineCategory);
        $this->_em->flush();
    }
}

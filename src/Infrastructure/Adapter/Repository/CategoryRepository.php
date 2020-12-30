<?php

namespace App\Infrastructure\Adapter\Repository;

use App\Infrastructure\Doctrine\Entity\DoctrineArticle;
use App\Infrastructure\Doctrine\Entity\DoctrineCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Ramsey\Uuid\UuidInterface;
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
        parent::__construct($registry, DoctrineCategory::class);
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
        self::hydrateArticle($doctrineCategory, $category);

        $this->_em->persist($doctrineCategory);
        $this->_em->flush();
    }

    /**
     * @param DoctrineCategory $doctrineCategory
     * @param Category $category
     */
    private static function hydrateArticle(DoctrineCategory $doctrineCategory, Category $category): void
    {
        $doctrineCategory->setId($category->getId());
        $doctrineCategory->setTitle($category->getTitle());
    }

    /**
     * @param Category $category
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function update(Category $category): void
    {
        $doctrineCategory = $this->find($category->getId());

        self::hydrateArticle($doctrineCategory, $category);

        $this->_em->persist($doctrineCategory);
        $this->_em->flush();
    }

    /**
     * @param UuidInterface $id
     * @return Category|null
     */
    public function getCategoryById(UuidInterface $id): ?Category
    {
        $doctrineCategory = $this->find($id);

        if ($doctrineCategory === null) {
            return null;
        }

        return new Category(
            $doctrineCategory->getId(),
            $doctrineCategory->getTitle()
        );
    }

    public function getCategories(int $page, int $limit, string $field, string $order): array
    {
        $fields = [
            'title' => 'q.title'
        ];

        $categories = $this->createQueryBuilder('q')
            ->orderBy($fields[$field], $order)
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return array_map(
            fn(DoctrineCategory $article) => new Category(
                $article->getId(),
                $article->getTitle(),
            ),
            $categories
        );
    }

    /**
     * @return int
     */
    public function countCategories(): int
    {
        return $this->count([]);
    }

    /**
     * @param Category $category
     * @return bool
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Category $category): bool
    {
        $doctrineCategory = $this->find($category->getId());

        $isRemovable = count($doctrineCategory->getArticles()->getValues()) <= 0;

        if ($isRemovable) {
            $this->_em->remove($doctrineCategory);
            $this->_em->flush();
        }

        return is_null($this->find($category->getId())) ? true : false;
    }
}
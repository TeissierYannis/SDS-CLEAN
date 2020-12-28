<?php

namespace App\Infrastructure\Adapter\Repository;

use App\Infrastructure\Doctrine\Entity\DoctrineArticle;
use App\Infrastructure\Doctrine\Entity\DoctrineCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\TransactionRequiredException;
use Doctrine\Persistence\ManagerRegistry;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Entity\Category;
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
        self::hydrateArticle($doctrineArticle, $article);

        $this->findCategoryFromArticle($article, $doctrineArticle);

        $this->_em->persist($doctrineArticle);
        $this->_em->flush();
    }

    /**
     * @param DoctrineArticle $doctrineArticle
     * @param Article $article
     */
    private static function hydrateArticle(DoctrineArticle $doctrineArticle, Article $article): void
    {
        $doctrineArticle->setId($article->getId());
        $doctrineArticle->setTitle($article->getTitle());
        $doctrineArticle->setContent($article->getContent());
    }

    /**
     * @param Article $article
     * @param DoctrineArticle $doctrineArticle
     * @throws ORMException
     * @throws OptimisticLockException
     * @throws TransactionRequiredException
     */
    private function findCategoryFromArticle(Article $article, DoctrineArticle $doctrineArticle): void
    {
        $category = $this->_em->find(DoctrineCategory::class, $article->getCategory()->getId());

        if (is_null($category)) {
            $category = new DoctrineCategory();

            $category->setId($article->getCategory()->getId());
            $category->setTitle($article->getCategory()->getTitle());

            $this->_em->persist($category);
            $this->_em->flush();
        }

        $doctrineArticle->setCategory($category);
    }

    /**
     * @param Article $article
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function update(Article $article): void
    {
        $doctrineArticle = $this->find($article->getId());

        self::hydrateArticle($doctrineArticle, $article);

        $this->findCategoryFromArticle($article, $doctrineArticle);

        $this->_em->persist($doctrineArticle);
        $this->_em->flush();
    }

    /**
     * @param UuidInterface $id
     * @return Article|null
     */
    public function getArticleById(UuidInterface $id): ?Article
    {
        $doctrineArticle = $this->find($id);

        if ($doctrineArticle === null) {
            return null;
        }

        $category = new Category(
            $doctrineArticle->getCategory()->getId(),
            $doctrineArticle->getCategory()->getTitle()
        );

        return new Article(
            $doctrineArticle->getId(),
            $doctrineArticle->getTitle(),
            $doctrineArticle->getContent(),
            $category
        );
    }

    /**
     * @param int $page
     * @param int $limit
     * @param string $field
     * @param string $order
     * @return Article[]
     */
    public function getArticles(int $page, int $limit, string $field, string $order): array
    {
        $fields = [
            'title' => 'q.title'
        ];

        $articles = $this->createQueryBuilder('q')
            ->join('q.category', 'a')
            ->orderBy($fields[$field], $order)
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return array_map(
            fn(DoctrineArticle $article) => new Article(
                $article->getId(),
                $article->getTitle(),
                $article->getContent(),
                new Category($article->getCategory()->getId(), $article->getCategory()->getTitle())
            ),
            $articles);
    }

    /**
     * @return int
     */
    public function countArticles(): int
    {
        return $this->count([]);
    }
}

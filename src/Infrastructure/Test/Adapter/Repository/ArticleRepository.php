<?php

namespace App\Infrastructure\Test\Adapter\Repository;

use App\Infrastructure\Doctrine\Entity\DoctrineCategory;
use App\Infrastructure\Doctrine\Entity\DoctrineArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Gateway\ArticleGateway;

class ArticleRepository extends ServiceEntityRepository implements ArticleGateway
{
    /**
     * @inheritDoc
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoctrineArticle::class);
    }

    /**
     * @param DoctrineArticle $doctrineArticle
     * @param Article $article
     */
    private function hydrateArticle(DoctrineArticle $doctrineArticle, Article $article): void
    {
        $doctrineArticle->setTitle($article->getTitle());
        $doctrineArticle->setContent($article->getContent());
        $doctrineArticle->setCategory($article->getCategory());
    }

    /**
     * @inheritDoc
     */
    public function create(Article $article): void
    {
        $doctrineArticle = new DoctrineRole();
        $doctrineArticle->setId($article->getId());

        $this->hydrateArticle($doctrineArticle, $article);

        $this->_em->persist($doctrineArticle);
        $this->_em->flush();
    }

    /**
     * @inheritDoc
     */
    public function update(Article $article): void
    {
        $doctrineArticle = $this->find($article->getId());

        $this->hydrateArticle($doctrineArticle, $article);

        $this->_em->persist($doctrineArticle);
        $this->_em->flush();
    }

    /**
     * @inheritDoc
     */
    public function getArticleById(UuidInterface $id): ?Article
    {
        /** @var DoctrineRole $doctrineArticle */
        $doctrineArticle = $this->find($id);

        if ($doctrineArticle === null) {
            return null;
        }

        return new Article(
            $doctrineArticle->getId(),
            $doctrineArticle->getTitle(),
            $doctrineArticle->getCategorys()->map(function (DoctrineCategory $doctrineCategory) use ($doctrineArticle) {
                return new Category(
                    $doctrineCategory->getId(),
                    $doctrineCategory->getTitle(),
                    $doctrineCategory->isGood()
                );
            })->toArray()
        );
    }

    public function remove(Article $article): bool
    {
    }

    public function getArticles(int $page, int $limit, string $field, string $order): array
    {
    }

    public function countArticles(): int
    {
    }
}

<?php

namespace App\Infrastructure\Adapter\Repository;

use App\Infrastructure\Doctrine\Entity\DoctrineArticle;
use App\Infrastructure\Doctrine\Entity\DoctrineCategory;
use App\Infrastructure\Doctrine\Entity\DoctrineProduct;
use App\Infrastructure\Doctrine\Entity\DoctrineUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\TransactionRequiredException;
use Doctrine\Persistence\ManagerRegistry;
use Ramsey\Uuid\UuidInterface;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Gateway\ArticleGateway;
use TYannis\SDS\Domain\Security\Entity\User;
use TYannis\SDS\Domain\Shop\Entity\Product;
use TYannis\SDS\Domain\Shop\Gateway\ProductGateway;

/**
 * Class ArticleRepository
 * @package App\Infrastructure\Adapter\Repository
 */
class ProductRepository extends ServiceEntityRepository implements ProductGateway
{
    /**
     * ArticleRepository constructor.
     * @param  ManagerRegistry  $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoctrineProduct::class);
    }

    /**
     * @param  Product  $product
     * @throws ORMException
     */
    public function create(Product $product): void
    {
        $doctrineProduct = new DoctrineProduct();

        self::hydrateProduct($doctrineProduct, $product);

        $this->_em->persist($doctrineProduct);
        $this->_em->flush();
    }

    /**
     * @param  DoctrineProduct  $doctrineProduct
     * @param  Product  $product
     */
    public static function hydrateProduct(DoctrineProduct $doctrineProduct, Product $product): void
    {
        $doctrineProduct->setId($product->getId());
        $doctrineProduct->setName($product->getName());
        $doctrineProduct->setDescription($product->getDescription());
        $doctrineProduct->setPrice($product->getPrice());
        $doctrineProduct->setImage($product->getImage());
    }


    public function countProducts(): int
    {
        return $this->count([]);
    }

    /**
     * @param  int  $page
     * @param  int  $limit
     * @param  string  $field
     * @param  string  $order
     * @return array
     */
    public function getProducts(int $page, int $limit, string $field, string $order): array
    {
        $fields = [
            'name' => 'q.name',
            'price' => 'q.price'
        ];

        $products = $this->createQueryBuilder('q')
            ->orderBy($fields[$field], $order)
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return array_map(
            function (DoctrineProduct $product) {
                return new Product(
                    $product->getId(),
                    $product->getName(),
                    $product->getDescription(),
                    $product->getPrice(),
                    $product->getImage()
                );
            },
            $products
        );
    }
}

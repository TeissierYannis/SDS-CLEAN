<?php

namespace App\Infrastructure\ParamConverter;

use Exception;
use Ramsey\Uuid\Uuid;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use TYannis\SDS\Domain\Blog\Entity\Article;
use TYannis\SDS\Domain\Shop\Entity\Product;
use TYannis\SDS\Domain\Shop\Gateway\ProductGateway;

class ProductConverter implements ParamConverterInterface
{
    /**
     * @var ProductGateway
     */
    private ProductGateway $productGateway;

    /**
     * ArticleConverter constructor.
     * @param  ProductGateway  $productGateway
     */
    public function __construct(ProductGateway $productGateway)
    {
        $this->productGateway = $productGateway;
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function apply(Request $request, ParamConverter $configuration)
    {
        $id = $this->productGateway->getProductById(Uuid::fromString($request->get('id')));

        if (is_null($id)) {
            throw new Exception('Unknown UUID');
        }

        $request->attributes
            ->set(
                'domainProduct',
                $id
            );
    }

    /**
     * @inheritDoc
     */
    public function supports(ParamConverter $configuration)
    {
        $configuration->setIsOptional(true);
        return $configuration->getClass() === Product::class;
    }
}

<?php

namespace App\Infrastructure\ParamConverter;

use Ramsey\Uuid\Uuid;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Gateway\CategoryGateway;

class CategoryConverter implements ParamConverterInterface
{
    /**
     * @var CategoryGateway
     */
    private CategoryGateway $categoryGateway;

    /**
     * CategoryConverter constructor.
     * @param CategoryGateway $categoryGateway
     */
    public function __construct(CategoryGateway $categoryGateway)
    {
        $this->categoryGateway = $categoryGateway;
    }


    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function apply(Request $request, ParamConverter $configuration)
    {
        $id = $this->categoryGateway->getCategoryById(Uuid::fromString($request->get('id')));

        if (is_null($id)) {
            throw new \Exception('Unknown UUID');
        }

        $request->attributes
            ->set(
                'domainCategory',
                $this->categoryGateway
                    ->getCategoryById(
                        Uuid::fromString(
                            $request->get('id')
                        )
                    )
            );
    }

    /**
     * @inheritDoc
     */
    public function supports(ParamConverter $configuration)
    {
        return $configuration->getClass() === Category::class;
    }
}

<?php

namespace App\UserInterface\Controller\Shop\Product;

use App\UserInterface\Presenter\Shop\Product\RemovePresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use TYannis\SDS\Domain\Shop\Entity\Product as DomainProduct;
use TYannis\SDS\Domain\Shop\Request\Product\RemoveRequest;
use TYannis\SDS\Domain\Shop\UseCase\Product\Remove;

/**
 * Class RemoveController
 * @package App\UserInterface\Controller\Product
 */
class RemoveController
{
    /**
     * @var UrlGeneratorInterface
     */
    private UrlGeneratorInterface $urlGenerator;

    /**
     * RemoveController constructor.
     * @param  UrlGeneratorInterface  $urlGenerator
     */
    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param  DomainProduct  $domainProduct
     * @param  Request  $request
     * @param  Remove  $remove
     * @param  RemovePresenter  $presenter
     * @return Response
     */
    public function __invoke(
        DomainProduct $domainProduct,
        Request $request,
        Remove $remove,
        RemovePresenter $presenter
    ): Response {
        $remove->execute(
            new RemoveRequest(
                $domainProduct->getId(),
                $domainProduct->getName(),
                $domainProduct->getDescription(),
                $domainProduct->getPrice(),
                $domainProduct->getImage()
            ),
            $presenter
        );

        return new RedirectResponse($this->urlGenerator->generate('product_listing'));
    }
}

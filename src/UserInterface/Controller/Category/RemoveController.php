<?php

namespace App\UserInterface\Controller\Category;

use App\UserInterface\Presenter\Category\RemovePresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use TYannis\SDS\Domain\Blog\Entity\Category as DomainCategory;
use TYannis\SDS\Domain\Blog\Request\Category\RemoveRequest;
use TYannis\SDS\Domain\Blog\UseCase\Category\Remove;

/**
 * Class RemoveController
 * @package App\UserInterface\Controller\Category
 */
class RemoveController
{
    /**
     * @var UrlGeneratorInterface
     */
    private UrlGeneratorInterface $urlGenerator;

    /**
     * RemoveController constructor.
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param DomainCategory $domainCategory
     * @param Request $request
     * @param Remove $remove
     * @param RemovePresenter $presenter
     * @return Response
     */
    public function __invoke(
        DomainCategory $domainCategory,
        Request $request,
        Remove $remove,
        RemovePresenter $presenter
    ): Response {

        $remove->execute(
            new RemoveRequest(
                $domainCategory->getId(),
                $domainCategory->getTitle(),
            ),
            $presenter
        );

        return new RedirectResponse($this->urlGenerator->generate('home'));
    }
}

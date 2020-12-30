<?php

namespace App\UserInterface\Controller\Article;

use App\UserInterface\Presenter\Article\RemovePresenter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use TYannis\SDS\Domain\Blog\Entity\Article as DomainArticle;
use TYannis\SDS\Domain\Blog\Request\Article\RemoveRequest;
use TYannis\SDS\Domain\Blog\UseCase\Article\Remove;

/**
 * Class RemoveController
 * @package App\UserInterface\Controller\Article
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
     * @param DomainArticle $domainArticle
     * @param Request $request
     * @param Remove $remove
     * @param RemovePresenter $presenter
     * @return Response
     */
    public function __invoke(
        DomainArticle $domainArticle,
        Request $request,
        Remove $remove,
        RemovePresenter $presenter
    ): Response {

        $remove->execute(
            new RemoveRequest(
                $domainArticle->getId(),
                $domainArticle->getTitle(),
                $domainArticle->getContent(),
                $domainArticle->getCategory()
            ),
            $presenter
        );

        return new RedirectResponse($this->urlGenerator->generate('home'));
    }
}

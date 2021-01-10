<?php

namespace App\UserInterface\Controller\Article;

use App\UserInterface\Presenter\Article\ListingPresenter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use TYannis\SDS\Domain\Blog\Request\Article\ListingRequest;
use TYannis\SDS\Domain\Blog\UseCase\Article\Listing;

/**
 * Class ListingController
 * @package App\UserInterface\Controller\Article
 */
class ListingController
{
    /**
     * @var Environment
     */
    private Environment $twig;

    /**
     * ListingController constructor.
     * @param  Environment  $twig
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(Request $request, Listing $listing): Response
    {
        $page = $request->get('page', 1);

        $presenter = new ListingPresenter();

        $listing->execute(
            new ListingRequest(
                $request->get('page', 1) <= 0 ? 1 : $page,
                $request->get('limit', 10),
                $request->get('field', 'title'),
                $request->get('order', 'asc'),
            ),
            $presenter
        );

        return new Response(
            $this->twig->render(
                'dashboard/redactor/articles/listing.html.twig',
                [
                    'vm' => $presenter->getViewModel()
                ]
            )
        );
    }
}

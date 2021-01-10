<?php

namespace App\UserInterface\Controller\Security\User;

use App\UserInterface\Presenter\Security\User\ListingPresenter;
use Assert\AssertionFailedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use TYannis\SDS\Domain\Security\Request\User\ListingRequest;
use TYannis\SDS\Domain\Security\UseCase\User\Listing;

/**
 * Class ListingController
 * @package App\UserInterface\Controller\Security\User
 */
class ListingController
{
    /**
     * @var Environment
     */
    private Environment $twig;

    /**
     * ListingController constructor.
     * @param Environment $twig
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @param  Request  $request
     * @param  Listing  $listing
     * @return Response
     * @throws AssertionFailedException
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __invoke(Request $request, Listing $listing): Response
    {
        $page = $request->get('page', 1);

        $presenter = new ListingPresenter();

        $listing->execute(
            new ListingRequest(
                $request->get('page', 1) <= 0 ? 1 : $page,
                $request->get('limit', 10),
                $request->get('field', 'pseudo'),
                $request->get('order', 'asc'),
            ),
            $presenter
        );

        return new Response($this->twig->render('dashboard/administrator/users/listing.html.twig', [
            'vm' => $presenter->getViewModel()
        ]));
    }
}

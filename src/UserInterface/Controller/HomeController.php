<?php

namespace App\UserInterface\Controller;

use App\UserInterface\Presenter\Shop\Product\ListingPresenter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use TYannis\SDS\Domain\Shop\Request\Product\ListingRequest;
use TYannis\SDS\Domain\Shop\UseCase\Product\Listing;

/**
 * Class HomeController
 * @package App\UserInterface\Controller
 */
class HomeController extends AbstractController
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

        $presenter = new ListingPresenter();

        $listing->execute(
            new ListingRequest(
                $request->get('page', 1),
                $request->get('limit', 3),
                $request->get('field', 'name'),
                $request->get('order', 'asc'),
            ),
            $presenter
        );

        return new Response(
            $this->twig->render(
                'public/home.html.twig',
                [
                    'vm' => $presenter->getViewModel()
                ]
            )
        );
    }
}

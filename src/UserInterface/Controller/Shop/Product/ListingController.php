<?php

namespace App\UserInterface\Controller\Shop\Product;

use App\UserInterface\DataTransferObject\Product;
use App\UserInterface\Form\ProductType;
use App\UserInterface\Presenter\Shop\Product\CreatePresenter;
use App\UserInterface\Presenter\Shop\Product\ListingPresenter;
use Assert\AssertionFailedException;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use TYannis\SDS\Domain\Shop\Request\Product\CreateRequest;
use TYannis\SDS\Domain\Shop\Request\Product\ListingRequest;
use TYannis\SDS\Domain\Shop\UseCase\Product\Create;
use TYannis\SDS\Domain\Shop\UseCase\Product\Listing;

/**
 * Class ListingController
 * @package App\UserInterface\Controller\Shop\Product
 */
class ListingController extends AbstractController
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
        $presenter = new ListingPresenter();

        $listing->execute(
            new ListingRequest(
                $request->get('page', 1),
                $request->get('limit', 10),
                $request->get('field', 'name'),
                $request->get('order', 'asc'),
            ),
            $presenter
        );

        return new Response($this->twig->render('dashboard/administrator/shop/products/listing.html.twig', [
            'vm' => $presenter->getViewModel()
        ]));
    }
}

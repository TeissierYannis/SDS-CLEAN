<?php

namespace App\UserInterface\Controller\Shop\Product;

use App\UserInterface\DataTransferObject\Product;
use App\UserInterface\Form\ProductType;
use App\UserInterface\Presenter\Shop\Product\CreatePresenter;
use Assert\AssertionFailedException;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
use TYannis\SDS\Domain\Shop\UseCase\Product\Create;

/**
 * Class CreateController
 * @package App\UserInterface\Controller\Shop\Product
 */
class CreateController extends AbstractController
{
    /**
     * @var FormFactoryInterface
     */
    private FormFactoryInterface $formFactory;

    /**
     * @var Environment
     */
    private Environment $twig;

    /**
     * @var UrlGeneratorInterface
     */
    private UrlGeneratorInterface $urlGenerator;

    /**
     * @var Security
     */
    private Security $security;

    /**
     * CreateController constructor.
     * @param  FormFactoryInterface  $formFactory
     * @param  Environment  $twig
     * @param  UrlGeneratorInterface  $urlGenerator
     * @param  Security  $security
     */
    public function __construct(
        FormFactoryInterface $formFactory,
        Environment $twig,
        UrlGeneratorInterface $urlGenerator,
        Security $security
    ) {
        $this->formFactory = $formFactory;
        $this->twig = $twig;
        $this->urlGenerator = $urlGenerator;
        $this->security = $security;
    }

    /**
     * @param  Request  $request
     * @param  Create  $create
     * @param  CreatePresenter  $presenter
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws AssertionFailedException
     */
    public function __invoke(Request $request, Create $create, CreatePresenter $presenter)
    {
        $product = new Product();

        $form = $this->formFactory
            ->create(ProductType::class, $product)
            ->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            $productPicture = $form->get('image')->getData();
            if ($productPicture) {
                $newFilename = 'product-' . uniqid() . $product->getName() . '.' . $productPicture->guessExtension();

                try {
                    $productPicture->move(
                        $this->getParameter('products_directory'),
                        $newFilename
                    );
                } catch (FileException $exception) {
                    $this->addFlash('error', 'Une erreur est survenue lors de la récupération de l\'image');
                }

                try {
                    $request = CreateRequest::create(
                        $product->getName(),
                        $product->getDescription(),
                        $product->getPrice(),
                        explode(
                            'public/',
                            $this->getParameter('products_directory')
                        )[1] . '/' . $newFilename
                    );

                    $create->execute($request, $presenter);
                } catch (Exception $e) {
                    $form->addError(new FormError($e->getMessage()));
                    $flashBag = new FlashBag();
                    $flashBag->clear();
                }
                return new RedirectResponse($this->generateUrl('product_listing'));
            }
        }

        return new Response(
            $this->twig->render(
                'dashboard/administrator/shop/products/create.html.twig',
                [
                    'form' => $form->createView()
                ]
            )
        );
    }
}

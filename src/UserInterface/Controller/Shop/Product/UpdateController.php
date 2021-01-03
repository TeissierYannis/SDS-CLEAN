<?php

namespace App\UserInterface\Controller\Shop\Product;

use App\UserInterface\DataTransferObject\Product;
use App\UserInterface\Form\ProductType;
use App\UserInterface\Presenter\Shop\Product\UpdatePresenter;
use Assert\AssertionFailedException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use TYannis\SDS\Domain\Shop\Entity\Product as DomainProduct;
use TYannis\SDS\Domain\Shop\Request\Product\UpdateRequest;
use TYannis\SDS\Domain\Shop\UseCase\Product\Update;

/**
 * Class UpdateController
 * @package App\UserInterface\Controller\Product
 */
class UpdateController extends AbstractController
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
     * UpdateController constructor.
     * @param  FormFactoryInterface  $formFactory
     * @param  Environment  $twig
     * @param  UrlGeneratorInterface  $urlGenerator
     */
    public function __construct(
        FormFactoryInterface $formFactory,
        Environment $twig,
        UrlGeneratorInterface $urlGenerator
    ) {
        $this->formFactory = $formFactory;
        $this->twig = $twig;
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param  DomainProduct  $domainProduct
     * @param  Request  $request
     * @param  Update  $create
     * @param  UpdatePresenter  $presenter
     * @return RedirectResponse|Response
     * @throws AssertionFailedException
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __invoke(
        DomainProduct $domainProduct,
        Request $request,
        Update $create,
        UpdatePresenter $presenter
    ) {
        $product = Product::fromDomainProduct($domainProduct);

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

                    $productPicture = explode(
                        'public/',
                        $this->getParameter('products_directory')
                    )[1] . '/' . $newFilename;
                } catch (FileException $exception) {
                    $this->addFlash('error', 'Une erreur est survenue lors de la récupération de l\'image');
                }
            } else {
                $productPicture = $domainProduct->getImage();
            }

            $request = UpdateRequest::create(
                $domainProduct->getId(),
                $product->getName(),
                $product->getDescription(),
                $product->getPrice(),
                $productPicture
            );
            $create->execute($request, $presenter);

            return new RedirectResponse($this->urlGenerator->generate('product_listing'));
        }
        return new Response(
            $this->twig->render(
                'dashboard/administrator/shop/products/update.html.twig',
                [
                    'form' => $form->createView(),
                    'productImage' => $domainProduct->getImage()
                ]
            )
        );
    }
}

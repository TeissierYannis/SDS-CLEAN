<?php

namespace App\UserInterface\Controller\Category;

use App\UserInterface\Form\CategoryType;
use App\UserInterface\Presenter\Category\CreateCategoryPresenter;
use Assert\AssertionFailedException;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Request\CreateCategoryRequest;
use TYannis\SDS\Domain\Blog\UseCase\CreateCategory;

/**
 * Class CreateController
 * @package App\UserInterface\Controller\Category
 */
class CreateController
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
     * CreateController constructor.
     * @param FormFactoryInterface $formFactory
     * @param Environment $twig
     * @param UrlGeneratorInterface $urlGenerator
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
     * @param Request $request
     * @param CreateCategory $create
     * @param CreateCategoryPresenter $presenter
     * @return RedirectResponse|Response
     * @throws AssertionFailedException
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __invoke(Request $request, CreateCategory $create, CreateCategoryPresenter $presenter)
    {
        $category = new \App\UserInterface\DataTransferObject\Category();

        $form = $this->formFactory
            ->create(CategoryType::class, $category)
            ->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            try {
                $category = Category::create($category->getTitle());
                $request = CreateCategoryRequest::create($category->getTitle());
                $create->execute($request, $presenter);
            } catch (\Exception $exception) {
                $form->addError(new FormError($exception->getMessage()));
                $flashBag = new FlashBag();
                $flashBag->clear();
            }
            if ($form->getErrors(true)->count() === 0) {
                return new RedirectResponse($this->urlGenerator->generate('home'));
            }
        }
        return new Response($this->twig->render('category/create.html.twig', [
            'form' => $form->createView()
        ]));
    }
}

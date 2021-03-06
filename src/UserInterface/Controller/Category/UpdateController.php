<?php

namespace App\UserInterface\Controller\Category;

use App\UserInterface\DataTransferObject\Category;
use App\UserInterface\Form\CategoryType;
use App\UserInterface\Presenter\Category\UpdatePresenter;
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
use TYannis\SDS\Domain\Blog\Entity\Category as DomainCategory;
use TYannis\SDS\Domain\Blog\Request\Category\UpdateRequest;
use TYannis\SDS\Domain\Blog\UseCase\Category\Update;

/**
 * Class UpdateController
 * @package App\UserInterface\Controller\Category
 */
class UpdateController
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
     * @param DomainCategory $domainCategory
     * @param Request $request
     * @param Update $create
     * @param UpdatePresenter $presenter
     * @return RedirectResponse|Response
     * @throws AssertionFailedException
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __invoke(
        DomainCategory $domainCategory,
        Request $request,
        Update $create,
        UpdatePresenter $presenter
    ) {
        $category = Category::fromDomainCategory($domainCategory);

        $form = $this->formFactory
            ->create(CategoryType::class, $category)
            ->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            try {
                $request = UpdateRequest::create($category->getId(), $category->getTitle());
                $create->execute($request, $presenter);
            } catch (\Exception $exception) {
                $form->addError(new FormError($exception->getMessage()));
                $flashBag = new FlashBag();
                $flashBag->clear();
            }
            if ($form->getErrors(true)->count() === 0) {
                return new RedirectResponse($this->urlGenerator->generate('category_listing'));
            }
        }
        return new Response($this->twig->render('dashboard/redactor/categories/update.html.twig', [
            'form' => $form->createView()
        ]));
    }
}

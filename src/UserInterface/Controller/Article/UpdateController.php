<?php

namespace App\UserInterface\Controller\Article;

use App\UserInterface\DataTransferObject\Article;
use App\UserInterface\Form\ArticleType;
use App\UserInterface\Presenter\Article\UpdatePresenter;
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
use TYannis\SDS\Domain\Blog\Entity\Article as DomainArticle;
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Request\Article\UpdateRequest;
use TYannis\SDS\Domain\Blog\UseCase\Article\Update;

/**
 * Class UpdateController
 * @package App\UserInterface\Controller\Article
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
     * UpdateController constructor.
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
     * @param DomainArticle $domainArticle
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
        DomainArticle $domainArticle,
        Request $request,
        Update $create,
        UpdatePresenter $presenter
    ) {
        $article = Article::fromDomainArticle($domainArticle);

        $form = $this->formFactory
            ->create(ArticleType::class, $article)
            ->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            $category = $form->get('category')->getData();

            if (is_string($category)) {
                $category = Category::create($category);
            } else {
                if (!empty($category)) {
                    $category = new Category($category->getId(), $category->getTitle());
                } else {
                    $form->addError(new FormError('Category cannot be null'));
                    $flashBag = new FlashBag();
                    $flashBag->clear();
                }
            }

            if ($form->getErrors(true)->count() === 0) {
                $request = UpdateRequest::create(
                    $domainArticle->getId(),
                    $article->getTitle(),
                    $article->getContent(),
                    $category
                );
                $create->execute($request, $presenter);

                return new RedirectResponse($this->urlGenerator->generate('home'));
            }
        }
        return new Response($this->twig->render('article/update.html.twig', [
            'form' => $form->createView()
        ]));
    }
}

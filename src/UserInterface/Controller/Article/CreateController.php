<?php

namespace App\UserInterface\Controller\Article;

use App\Infrastructure\Adapter\Repository\UserRepository;
use App\UserInterface\DataTransferObject\Article;
use App\UserInterface\Form\ArticleType;
use App\UserInterface\Presenter\Article\CreatePresenter;
use Assert\AssertionFailedException;
use DateTime;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormFactoryInterface;
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
use TYannis\SDS\Domain\Blog\Entity\Category;
use TYannis\SDS\Domain\Blog\Request\Article\CreateRequest;
use TYannis\SDS\Domain\Blog\UseCase\Article\Create;
use TYannis\SDS\Domain\Security\Gateway\UserGateway;

/**
 * Class CreateController
 * @package App\UserInterface\Controller\Article
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
     * @var Security
     */
    private Security $security;

    /**
     * @var UserGateway
     */
    private UserGateway $userGateway;

    /**
     * CreateController constructor.
     * @param  FormFactoryInterface  $formFactory
     * @param  Environment  $twig
     * @param  UrlGeneratorInterface  $urlGenerator
     * @param  Security  $security
     * @param  UserGateway  $userGateway
     */
    public function __construct(
        FormFactoryInterface $formFactory,
        Environment $twig,
        UrlGeneratorInterface $urlGenerator,
        Security $security,
        UserGateway $userGateway
    ) {
        $this->formFactory = $formFactory;
        $this->twig = $twig;
        $this->urlGenerator = $urlGenerator;
        $this->security = $security;
        $this->userGateway = $userGateway;
    }

    /**
     * @param  Request  $request
     * @param  Create  $create
     * @param  CreatePresenter  $presenter
     * @return RedirectResponse|Response
     * @throws AssertionFailedException
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __invoke(Request $request, Create $create, CreatePresenter $presenter)
    {
        $article = new Article();

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
                $request = CreateRequest::create(
                    $article->getTitle(),
                    $article->getContent(),
                    $category,
                    new DateTime(),
                    $this->userGateway->getUserByEmail($this->security->getUser()->getUsername())
                );
                $create->execute($request, $presenter);

                return new RedirectResponse($this->urlGenerator->generate('article_listing'));
            }
        }
        return new Response(
            $this->twig->render(
                'dashboard/redactor/articles/create.html.twig',
                [
                    'form' => $form->createView()
                ]
            )
        );
    }
}

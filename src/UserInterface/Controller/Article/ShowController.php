<?php

namespace App\UserInterface\Controller\Article;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use TYannis\SDS\Domain\Blog\Entity\Article;

/**
 * Class ShowController
 * @package App\UserInterface\Controller\Article
 */
class ShowController
{
    private Environment $twig;

    /**
     * ShowController constructor.
     * @param  Environment  $twig
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @param  Article  $domainArticle
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __invoke(Article $domainArticle)
    {
        return new Response($this->twig->render('public/article/show.html.twig', [
            'article' => $domainArticle
        ]));
    }
}